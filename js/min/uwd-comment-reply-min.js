var addComment={moveForm:function(e,t,n,o){var i,r,d,m,l=this,a=l.I(e),c=l.I(n),s=l.I("cancel-comment-reply-link"),p=l.I("comment_parent"),u=l.I("comment_post_ID"),f=c.getElementsByTagName("form")[0];if(a&&c&&s&&p&&f){l.respondId=n,o=o||!1,l.I("wp-temp-form-div")||(i=document.createElement("div"),i.id="wp-temp-form-div",i.style.display="none",c.parentNode.insertBefore(i,c)),a.parentNode.insertBefore(c,a.nextSibling),u&&o&&(u.value=o),p.value=t,s.style.display="",s.onclick=function(){var e=addComment,t=e.I("wp-temp-form-div"),n=e.I(e.respondId);if(t&&n)return e.I("comment_parent").value="0",t.parentNode.insertBefore(n,t),t.parentNode.removeChild(t),this.style.display="none",this.onclick=null,!1};try{for(var y=0;y<f.elements.length;y++)if(r=f.elements[y],m=!1,"getComputedStyle"in window?d=window.getComputedStyle(r):document.documentElement.currentStyle&&(d=r.currentStyle),(r.offsetWidth<=0&&r.offsetHeight<=0||"hidden"===d.visibility)&&(m=!0),"hidden"!==r.type&&!r.disabled&&!m&&"comment"==r.getAttribute("id")){r.focus();break}}catch(v){}return!1}},I:function(e){return document.getElementById(e)}};