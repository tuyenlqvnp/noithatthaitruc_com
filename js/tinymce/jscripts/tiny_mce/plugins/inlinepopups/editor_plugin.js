(function(){var d=tinymce.DOM,b=tinymce.dom.Element,a=tinymce.dom.Event,e=tinymce.each,c=tinymce.is;tinymce.create("tinymce.plugins.InlinePopups",{init:function(f,g){f.onBeforeRenderUI.add(function(){f.windowManager=new tinymce.InlineWindowManager(f);d.loadCSS(g+"/skins/"+(f.settings.inlinepopups_skin||"clearlooks2")+"/window.css")})},getInfo:function(){return{longname:"InlinePopups",author:"Moxiecode Systems AB",authorurl:"http://tinymce.moxiecode.com",infourl:"http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/inlinepopups",version:tinymce.majorVersion+"."+tinymce.minorVersion}}});tinymce.create("tinymce.InlineWindowManager:tinymce.WindowManager",{InlineWindowManager:function(f){var g=this;g.parent(f);g.zIndex=300000;g.count=0;g.windows={}},open:function(r,j){var y=this,i,k="",q=y.editor,g=0,s=0,h,m,n,o,l,v,x;r=r||{};j=j||{};if(!r.inline){return y.parent(r,j)}if(!r.type){y.bookmark=q.selection.getBookmark(1)}i=d.uniqueId();h=d.getViewPort();r.width=parseInt(r.width||320);r.height=parseInt(r.height||240)+(tinymce.isIE?8:0);r.min_width=parseInt(r.min_width||150);r.min_height=parseInt(r.min_height||100);r.max_width=parseInt(r.max_width||2000);r.max_height=parseInt(r.max_height||2000);r.left=r.left||Math.round(Math.max(h.x,h.x+(h.w/2)-(r.width/2)));r.top=r.top||Math.round(Math.max(h.y,h.y+(h.h/2)-(r.height/2)));r.movable=r.resizable=true;j.mce_width=r.width;j.mce_height=r.height;j.mce_inline=true;j.mce_window_id=i;j.mce_auto_focus=r.auto_focus;y.features=r;y.params=j;y.onOpen.dispatch(y,r,j);if(r.type){k+=" mceModal";if(r.type){k+=" mce"+r.type.substring(0,1).toUpperCase()+r.type.substring(1)}r.resizable=false}if(r.statusbar){k+=" mceStatusbar"}if(r.resizable){k+=" mceResizable"}if(r.minimizable){k+=" mceMinimizable"}if(r.maximizable){k+=" mceMaximizable"}if(r.movable){k+=" mceMovable"}y._addAll(d.doc.body,["div",{id:i,"class":q.settings.inlinepopups_skin||"clearlooks2",style:"width:100px;height:100px"},["div",{id:i+"_wrapper","class":"mceWrapper"+k},["div",{id:i+"_top","class":"mceTop"},["div",{"class":"mceLeft"}],["div",{"class":"mceCenter"}],["div",{"class":"mceRight"}],["span",{id:i+"_title"},r.title||""]],["div",{id:i+"_middle","class":"mceMiddle"},["div",{id:i+"_left","class":"mceLeft"}],["span",{id:i+"_content"}],["div",{id:i+"_right","class":"mceRight"}]],["div",{id:i+"_bottom","class":"mceBottom"},["div",{"class":"mceLeft"}],["div",{"class":"mceCenter"}],["div",{"class":"mceRight"}],["span",{id:i+"_status"},"Content"]],["a",{"class":"mceMove",tabindex:"-1",href:"javascript:;"}],["a",{"class":"mceMin",tabindex:"-1",href:"javascript:;",onmousedown:"return false;"}],["a",{"class":"mceMax",tabindex:"-1",href:"javascript:;",onmousedown:"return false;"}],["a",{"class":"mceMed",tabindex:"-1",href:"javascript:;",onmousedown:"return false;"}],["a",{"class":"mceClose",tabindex:"-1",href:"javascript:;",onmousedown:"return false;"}],["a",{id:i+"_resize_n","class":"mceResize mceResizeN",tabindex:"-1",href:"javascript:;"}],["a",{id:i+"_resize_s","class":"mceResize mceResizeS",tabindex:"-1",href:"javascript:;"}],["a",{id:i+"_resize_w","class":"mceResize mceResizeW",tabindex:"-1",href:"javascript:;"}],["a",{id:i+"_resize_e","class":"mceResize mceResizeE",tabindex:"-1",href:"javascript:;"}],["a",{id:i+"_resize_nw","class":"mceResize mceResizeNW",tabindex:"-1",href:"javascript:;"}],["a",{id:i+"_resize_ne","class":"mceResize mceResizeNE",tabindex:"-1",href:"javascript:;"}],["a",{id:i+"_resize_sw","class":"mceResize mceResizeSW",tabindex:"-1",href:"javascript:;"}],["a",{id:i+"_resize_se","class":"mceResize mceResizeSE",tabindex:"-1",href:"javascript:;"}]]]);d.setStyles(i,{top:-10000,left:-10000});if(tinymce.isGecko){d.setStyle(i,"overflow","auto")}if(!r.type){g+=d.get(i+"_left").clientWidth;g+=d.get(i+"_right").clientWidth;s+=d.get(i+"_top").clientHeight;s+=d.get(i+"_bottom").clientHeight}d.setStyles(i,{top:r.top,left:r.left,width:r.width+g,height:r.height+s});x=r.url||r.file;if(x){if(tinymce.relaxedDomain){x+=(x.indexOf("?")==-1?"?":"&")+"mce_rdomain="+tinymce.relaxedDomain}x=tinymce._addVer(x)}if(!r.type){d.add(i+"_content","iframe",{id:i+"_ifr",src:'javascript:""',frameBorder:0,style:"border:0;width:10px;height:10px"});d.setStyles(i+"_ifr",{width:r.width,height:r.height});d.setAttrib(i+"_ifr","src",x)}else{d.add(i+"_wrapper","a",{id:i+"_ok","class":"mceButton mceOk",href:"javascript:;",onmousedown:"return fa