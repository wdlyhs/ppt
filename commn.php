<?php


class Qnycn{
    protected $accessKey ;//七牛云 访问ID
    protected $secretKey ;//七牛云 访问密钥
    protected $bucket;//空间名
    protected $url;//空间对应的网址
    protected $imgUrlArray;//上传返回的
    /**
     * 文件的前缀 以字母开头 /结束 prefix 如： 'image/jpg/'
     * 可以在构造函数中用用户呢称取得配置
     */
    public $prefix='' ;

    /**
     * 图片上传配置，可在构造函数中从系统取值，不过就要去掉 static属性
     */
    static private $imgconfig=array(
        'types' => '.gif|.jpeg|.png|.bmp|.jpg',//图片类型
        'size'  => 2*1024*1024//文件大小 2M
    )

    /**
     * 构造函数
     * 自动的初始化密钥和空间域名
     * 可以在这里通过数据库处理这些
     * @param  string  $prefix
     */
    public function __construct($prefix=null)
    {
        $this->accessKey = Config::get('appkey.qnyaccessKey');
        $this->secretKey = Config::get('appkey.qnysecretKey');
        $this->bucket    = Config::get('appkey.qnybucket');
        $this->url       = Config::get('appkey.qnyurl');
        if($prefix){
            (substr($prefix,-1) == '/')? $prefix : $prefix.'/';
        }
    }

    public  function __get($name)
    {
        return $this->$name;
    }

    /**
     * 我的想法是多张图片上传，将返回的图片信息在最后保存到数据库
     * */
    public function __destruct()
    {
        //trace('bb','aaa');
    }

    /**
     * 网上抓取
     * @access public
     * @param  string  $url 网络上的图片地址
     * @param  string  $suffix 文件后缀 默认JPG
     * @return string $imgurl  图片地址
     */
    public function fetchImg($url,$suffix='jpg')
    {
        $auth = new Auth($this->accessKey, $this->secretKey);
        $bucketManager = new BucketManager($auth);
        $key=date('YmdHis').rand(10000, 99999).'.'.$suffix;
        list($ret, $err) = $bucketManager->fetch($url, $this->bucket, $key);
        if ($err == null) {
            $this->saveToDB($ret['key']);
            return $this->url.$ret['key'];
        }
    }

    /**
     * 取得上传的Token
     * @access public
     * @param  string  $url 网络上的图片地址
     * @param  string  $suffix 文件后缀 默认JPG
     * @return string $imgurl  图片地址
     */
    public function authUploadToken()
    {
        //设置了回调地址，前端就不会返回值了。
        $expires=array(
            'returnBody'=>'{"key":"'.$this->url.'$(key)","hash":"$(etag)","fsize":$(fsize),"name":"$(x:name)"}',
            'callbackUrl' => 'https://www.wyx2013.cn/wxapi/qiniucallback',
            'callbackBody' => '{"key":"$(key)","hash":"$(etag)","fsize":$(fsize),"bucket":"$(bucket)","name":"$(x:name)"，"user":"admin"}',
            'callbackBodyType' => 'application/json'
        );
        $auth = new Auth($this->accessKey, $this->secretKey);
        return $auth->uploadToken($this->bucket, null,600, $expires);//前端上传，第三个参数为时间，不用太长
    }

    /**
     * 图片上传
     * @access public
     * @param  array  $file  一个单图就是$_FILES[key] 含以下信息
     * ["name"]=> string(9) "TS 37.jpg"
     * ["type"] =&gt; string(10) "image/jpeg"
     * ["tmp_name"] =&gt; string(14) "/tmp/phpAuVNJu"
     * ["error"] =&gt; int(0)
     * ["size"] =&gt; int(423024)
     * 如果是单图上传 $keys = array_keys($_FILES);
     * $key=$keys[0];
     * if($_FILES[$key]['error'] == 0)
     * $CLASS->->uploadimg($_FILES[$key]);
     *
     * @return string $imgurl  图片地址
     */
    public function uploadimg($file)
    {
        $suffix=$this->checkimgfile($file['name'],$file['size']);
        if($suffix){
            $img=$this->uploadFile($file['tmp_name'],$suffix);
            $imgurl=$this->url.$img;
            $this->imgUrlArray[]=$img;
            return $imgurl;//返回的是一张图片的地址
        }
    }

    /**
     * 多图上传 适用于 multiple 一定要加上
     * <input id="ajaxfiles" type="file" name="file[]" multiple="multiple" />
     * @access public
     * @param  string  $file  <input type="file"  name="file[]"  multiple="multiple">中的name值 不包括[]
     * @return array $imgurlarray  图片地址数组
     */
    public function uploadimgs($file='files')
    {
        $c=count($_FILES[$file]['error']);
        for($i=0;$i<$c;++$i){
            $suffix=$this->checkimgfile($_FILES[$file]['name'][$i],$_FILES[$file]['size'][$i]);
            if($suffix){
                $img=$this->uploadFile($_FILES[$file]['tmp_name'][$i],$suffix);
                if($img){
                    $imgurlarray[]=$this->url.$img;
                }
            }
        }
        $this->saveToDB($imgurlarray);
        return $imgurlarray;//调用此方法，返回的是数组
    }

    /**
     * 文件删除
     * @access public
     * @param  string  $key  图片在空间的KEY值
     * @return boolean 成功true 失败 false
     */
    public function delete($key='')
    {
        $auth = new Auth($this->accessKey, $this->secretKey);// 构建鉴权对象
        $bucketMgr = new BucketManager($auth);//初始化BucketManager
        $err = $bucketMgr->delete($this->bucket, $key);
        return $err ? true : false ;
    }

    /**
     * 文件列表
     * @access public
     * @param  Boolean  $c  值为真即返 回数组 为假返回总数量
     * @return array or int
     */
    public function listFiles($c = false )
    {
        $auth = new Auth($this->accessKey, $this->secretKey);// 构建鉴权对象
        $bucketMgr = new BucketManager($auth);
        $bucket=$this->bucket;
        $prefix = 'image/jpg/';//前缀
        $marker = '';//标记
        $limit = 10000;//条数
        $delimiter = '/';//指定目录分隔符
        list($iterms, $err) = $bucketMgr->listFiles($bucket, $prefix, $marker, $limit, $delimiter);
        if ($err !== null) {
            return false;//没有文件返回空
        } else {
            if($c){ return $iterms;  }else{ return count($iterms); }
        }
    }

    /**
     * 图片检测并返回后缀
     * @access private
     * @param  string  $name  图片名
     * @param  int  $size  图片大小
     * @return string $suffix图片后缀
     */
    public function checkimgfile($name,$size)
    {
        $suffix=pathinfo($name, PATHINFO_EXTENSION); //取得后缀
        if(stripos(self::$imgconfig['types'],$suffix) && $size<self::$imgconfig['size']){
            return $suffix;
        }else{
            return false;
        }
    }

    /**
     * 文件上传
     * @access private
     * @param  file $fileOjb 本地临时文件地址
     * @param  string  $suffix  文件后缀
     * @return mixed 成功上传 返回文件的名
     */
    private function uploadFile($fileOjb,$suffix )
    {
        $auth = new Auth($this->accessKey, $this->secretKey);// 构建鉴权对象
        $bucket = $this->bucket;// 要上传的空间
        $token = $auth->uploadToken($bucket);// 生成上传 Token
        $uploadMgr = new UploadManager();// 构建 UploadManager 对象
        $key=date('YmdHis').rand(10000, 99999) . '.' . $suffix;//文件名 用时间命名
        $key=empty($this->prefix) ? $key : $this->prefix.$key;
        list($ret, $err) = $uploadMgr->putFile($token, $key, $fileOjb);//上传
        return ($err !== null)? false : $ret['key'];
    }

    /**
     * 将图片保存到表格里面
     * @access private
     * @param  string array  $img  单个图片为或多个图片名
     * @return mixed
     */
    private function saveToDB($img )
    {
        //$m=new AdminImg();
        if(is_string($img)){
            //$m->img=$img;
            //$m->imgurl=$imgurl;
            //$m->save();
        }elseif(is_array($img)){
            $url=$this->url;
            foreach($img as $value){
                $data[]=array('img'=>$value,'imgurl'=>$url.$value);
            }
            //$m->saveAll($data);
        }
    }
}