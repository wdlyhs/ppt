// JavaScript Document
// jQuery flexImages v1.0.4
// https://github.com/Pixabay/jQuery-flexImages
!function(t){function e(t,a,r,n){function o(t){r.maxRows&&d>r.maxRows||r.truncate&&t&&d>1?w[g][0].style.display="none":(w[g][4]&&(w[g][3].attr("src",w[g][4]),w[g][4]=""),w[g][0].style.width=l+"px",w[g][0].style.height=u+"px",w[g][0].style.display="block")}var g,l,s=1,d=1,f=t.width()-2,w=[],c=0,u=r.rowHeight;for(f||(f=t.width()-2),i=0;i<a.length;i++)if(w.push(a[i]),c+=a[i][2]+r.margin,c>=f){var m=w.length*r.margin;for(s=(f-m)/(c-m),u=Math.ceil(r.rowHeight*s),exact_w=0,l,g=0;g<w.length;g++)l=Math.ceil(w[g][2]*s),exact_w+=l+r.margin,exact_w>f&&(l-=exact_w-f),o();w=[],c=0,d++}for(g=0;g<w.length;g++)l=Math.floor(w[g][2]*s),h=Math.floor(r.rowHeight*s),o(!0);n||f==t.width()||e(t,a,r,!0)}t.fn.flexImages=function(a){var i=t.extend({container:".item",object:"img",rowHeight:180,maxRows:0,truncate:0},a);return this.each(function(){var a=t(this),r=t(a).find(i.container),n=[],o=(new Date).getTime(),h=window.getComputedStyle?getComputedStyle(r[0],null):r[0].currentStyle;for(i.margin=(parseInt(h.marginLeft)||0)+(parseInt(h.marginRight)||0)+(Math.round(parseFloat(h.borderLeftWidth))||0)+(Math.round(parseFloat(h.borderRightWidth))||0),j=0;j<r.length;j++){var g=r[j],l=parseInt(g.getAttribute("data-w")),s=l*(i.rowHeight/parseInt(g.getAttribute("data-h"))),d=t(g).find(i.object);n.push([g,l,s,d,d.data("src")])}e(a,n,i),t(window).off("resize.flexImages"+a.data("flex-t")),t(window).on("resize.flexImages"+o,function(){e(a,n,i)}),a.data("flex-t",o)})}}(jQuery);
if ($('.grid-h').length) {
    $('.bjones').flexImages({
        rowHeight: 320,
        container:'.grid-h',
        truncate:true
    });
}