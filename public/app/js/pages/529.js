"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[529],{7290:(e,l,r)=>{r.d(l,{Z:()=>o});var t=r(5548),a={class:"flex items-center"},n=["for"];const o={__name:"CustomCheckbox",props:["modelValue","label"],emits:["update:modelValue"],setup:function(e,l){var r=l.emit,o=e,s=(0,t.iH)(Boolean(o.modelValue)),i=function(e){r("update:modelValue",e.target.checked)};return function(l,r){return(0,t.wg)(),(0,t.iD)("div",a,[(0,t.wy)((0,t._)("input",{type:"checkbox","onUpdate:modelValue":r[0]||(r[0]=function(e){return s.value=e}),onChange:i,class:"w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500"},null,544),[[t.e8,s.value]]),(0,t._)("label",{for:"checkbox-"+e.label.replace(" ",""),class:"ml-2 text-sm font-medium text-gray-900"},(0,t.zw)(e.label),9,n)])}}}},7501:(e,l,r)=>{r.d(l,{Z:()=>m});var t=r(5548),a=["for"],n={class:"w-64"},o=["src"],s={class:"w-64"},i={key:0,controls:""},u=["src"],d=["id","required"],c={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"};const m={__name:"CustomFileInput",props:["name","modelValue","errors","label","preview","isDelete","type","styles","required"],emits:["update:modelValue","delete"],setup:function(e,l){var r=l.emit,m=e,p=(0,t.iH)(null),g=function(e){m.errors&&m.errors[m.name]&&(m.errors[m.name]=""),r("update:modelValue",e.target.files[0])};return function(l,m){return(0,t.wg)(),(0,t.iD)("div",null,[(0,t._)("label",{for:e.name,class:(0,t.C_)(["block mb-2 text-sm font-medium text-gray-900",{"text-red-700":e.errors[e.name]}])},[(0,t.Uk)((0,t.zw)(e.label)+" ",1),e.isDelete?((0,t.wg)(),(0,t.iD)("a",{key:0,href:"#",onClick:m[0]||(m[0]=(0,t.iM)((function(e){return r("delete")}),["prevent"])),class:"text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-2 py-1 text-center"},"Delete")):(0,t.kq)("",!0)],10,a),(0,t._)("div",n,[e.preview&&"video"!==e.type&&"string"==typeof e.preview?((0,t.wg)(),(0,t.iD)("img",{key:0,src:"/storage/"+e.preview,class:"w-full mb-3",style:(0,t.j5)(e.styles)},null,12,o)):(0,t.kq)("",!0)]),(0,t._)("div",s,[e.preview&&"video"===e.type&&"string"==typeof e.preview?((0,t.wg)(),(0,t.iD)("video",i,[(0,t._)("source",{src:"/storage/"+e.preview,type:"video/mp4"},null,8,u)])):(0,t.kq)("",!0)]),(0,t._)("input",{ref_key:"input",ref:p,id:e.name,type:"file",onInput:g,required:e.required||!1,class:(0,t.C_)(["bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5",{"bg-red-50 border border-red-500 text-red-900 placeholder-red-700":e.errors[e.name]}])},null,42,d),e.errors[e.name]?((0,t.wg)(),(0,t.iD)("p",c,(0,t.zw)(e.errors[e.name]),1)):(0,t.kq)("",!0)])}}}},393:(e,l,r)=>{r.d(l,{Z:()=>s});var t=r(5548),a=["for"],n=["id","type","value","required","name"],o={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"};const s={__name:"CustomInput",props:["modelValue","type","name","errors","label","required"],emits:["update:modelValue"],setup:function(e,l){var r=l.emit,s=e,i=(0,t.iH)(null);(0,t.bv)((function(){i.value.hasAttribute("autofocus")&&i.value.focus()}));var u=function(e){s.errors&&s.errors[s.name]&&(s.errors[s.name]=""),r("update:modelValue",e.target.value)};return function(l,r){return(0,t.wg)(),(0,t.iD)("div",null,[(0,t._)("label",{for:e.name,class:(0,t.C_)(["block mb-2 text-sm font-medium text-gray-900",{"text-red-700":e.errors&&e.errors[e.name]}])},(0,t.zw)(e.label),11,a),(0,t._)("input",{ref_key:"input",ref:i,id:e.name,type:e.type,value:e.modelValue,required:e.required,name:e.name,onInput:u,class:(0,t.C_)(["bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5",{"bg-red-50 border border-red-500 text-red-900 placeholder-red-700":e.errors&&e.errors[e.name]}])},null,42,n),e.errors&&e.errors[e.name]?((0,t.wg)(),(0,t.iD)("p",o,(0,t.zw)(e.errors[e.name]),1)):(0,t.kq)("",!0)])}}}},8145:(e,l,r)=>{r.d(l,{Z:()=>s});var t=r(5548),a=r(8748),n={class:"w-full"},o={class:"flex flex-wrap text-sm font-medium text-center text-gray-500"};const s={__name:"LanguageSwitcher",emits:["update:modelValue"],setup:function(e,l){var r=l.emit,s=((0,t.Fl)((function(){return(0,a.qt)().props.laguages})),(0,t.iH)("main")),i=function(e){s.value=e,r("update:modelValue",e)};return function(e,l){return(0,t.wg)(),(0,t.iD)("div",n,[(0,t._)("ul",o,[(0,t._)("li",{class:"mr-2 cursor-pointer",onClick:l[0]||(l[0]=(0,t.iM)((function(e){return i("main")}),["prevent"]))},[(0,t._)("span",{class:(0,t.C_)(["inline-block py-3 px-4 rounded-lg hover:text-white hover:bg-blue-400 text-lg",{"active text-white bg-blue-600":"main"===s.value}])},"Main",2)]),(0,t._)("li",{class:"mr-2 cursor-pointer",onClick:l[1]||(l[1]=(0,t.iM)((function(e){return i("uk")}),["prevent"]))},[(0,t._)("span",{class:(0,t.C_)(["inline-block py-3 px-4 rounded-lg hover:text-white hover:bg-blue-400 text-lg",{"active text-white bg-blue-600":"uk"===s.value}])},"UK",2)]),(0,t._)("li",{class:"mr-2 cursor-pointer",onClick:l[2]||(l[2]=(0,t.iM)((function(e){return i("en")}),["prevent"]))},[(0,t._)("span",{class:(0,t.C_)(["inline-block py-3 px-4 rounded-lg hover:text-white hover:bg-blue-400 text-lg",{"active text-white bg-blue-600":"en"===s.value}])},"EN",2)])])])}}}},7864:(e,l,r)=>{r.d(l,{Z:()=>O});var t=r(5548),a=r(8748),n=(0,t.uE)('<div class="sidebar-header w-80 flex items-center justify-center py-4"><div class="inline-flex"><a href="#" class="inline-flex flex-row items-center"><svg class="w-10 h-10 text-red-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.757 2.034a1 1 0 01.638.519c.483.967.844 1.554 1.207 2.03.368.482.756.876 1.348 1.467A6.985 6.985 0 0117 11a7.002 7.002 0 01-14 0c0-1.79.684-3.583 2.05-4.95a1 1 0 011.707.707c0 1.12.07 1.973.398 2.654.18.374.461.74.945 1.067.116-1.061.328-2.354.614-3.58.225-.966.505-1.93.839-2.734.167-.403.356-.785.57-1.116.208-.322.476-.649.822-.88a1 1 0 01.812-.134zm.364 13.087A2.998 2.998 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879.586.585.879 1.353.879 2.121s-.293 1.536-.879 2.121z" clip-rule="evenodd"></path></svg><span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">DForce admin</span></a></div></div>',1),o={class:"sidebar-content px-4 py-6"},s={class:"flex flex-col w-full"},i={class:"my-px"},u={key:0},d=["onClick"],c=(0,t._)("span",{class:"flex items-center justify-center text-lg text-gray-400"},[(0,t._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,t._)("path",{d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})])],-1),m={class:"ml-3"},p=(0,t._)("svg",{class:"w-6 h-6 ml-auto",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[(0,t._)("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),g={key:0,class:"bg-white rounded-lg"},f={class:"my-px"},v={key:1},x=(0,t._)("span",{class:"flex items-center justify-center text-lg text-gray-400"},[(0,t._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,t._)("path",{d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})])],-1),w={class:"ml-3"},b={key:1,class:"flex font-medium text-sm text-gray-300 px-4 my-4 uppercase"},_={class:"my-px"},h=["href"],y=[(0,t._)("span",{class:"flex items-center justify-center text-lg text-red-400"},[(0,t._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,t._)("path",{d:"M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"})])],-1),(0,t._)("span",{class:"ml-3"},"Logout",-1)];const k={__name:"Sidebar",setup:function(e){var l=(0,t.iH)(!1),r=route().current(),k=(0,t.iH)(!1),V=(0,t.iH)([{route:"admin.dashboard",group:"admin.dashboard",title:"Головна"},{route:"admin.translations.index",group:"admin.translations",title:"Переклади"},{route:"admin.settings.index",group:"admin.settings",title:"Додаткові змінні"},{route:null,title:"Контент"},{route:"admin.banners.index",group:"admin.banners.index",title:"Банери"},{route:"admin.sliders.index",group:"admin.sliders.index",title:"Слайдери"},{route:"admin.file-manager",group:"admin.file-manager",title:"Файловий менеджер"},{route:"admin.seo-rule.index",group:"admin.seo-rule",title:"SEO правила"},{route:"admin.links.index",group:"admin.links",title:"Посилання"},{route:"admin.menu.index",group:"admin.menu",title:"Меню"},{route:null,title:"Управління"},{route:"admin.users.index",group:"admin.users",title:"Користувачі"},{route:"admin.roles.index",group:"admin.roles",title:"Ролі"}]);return(0,t.bv)((function(){})),function(e,U){return(0,t.wg)(),(0,t.iD)("aside",{class:(0,t.C_)(["sidebar w-80 md:shadow transform md:translate-x-0 transition-transform duration-150 ease-in bg-slate-500",{"-translate-x-full":!l.value}])},[n,(0,t._)("div",o,[(0,t._)("ul",s,[((0,t.wg)(!0),(0,t.iD)(t.HY,null,(0,t.Ko)(V.value,(function(l){return(0,t.wg)(),(0,t.iD)("li",i,[l.sublist&&l.sublist.length>0?((0,t.wg)(),(0,t.iD)("div",u,[(0,t._)("div",{class:(0,t.C_)(["flex flex-row items-center h-10 px-3 rounded-lg cursor-pointer",{"text-gray-700 bg-gray-100":(0,t.SU)(r).includes(l.group),"text-gray-300 hover:bg-gray-100 hover:text-gray-700":!(0,t.SU)(r).includes(l.group)}]),onClick:function(e){return r=l.group,void(k.value===r?k.value=!1:k.value=r);var r}},[c,(0,t._)("span",m,(0,t.zw)(l.title),1),p],10,d),l.sublist&&l.sublist.length>0?(0,t.wy)(((0,t.wg)(),(0,t.iD)("ul",g,[((0,t.wg)(!0),(0,t.iD)(t.HY,null,(0,t.Ko)(l.sublist,(function(l){return(0,t.wg)(),(0,t.iD)("li",f,[(0,t.Wm)((0,t.SU)(a.rU),{href:e.route(l.route,l.routeParams||[]),class:"flex flex-row items-center h-10 px-3 rounded-lg"},{default:(0,t.w5)((function(){return[(0,t._)("span",{class:(0,t.C_)(["ml-3",{"text-white bg-slate-500 rounded-lg px-3 w-full":(0,t.SU)(r)===l.route}])},(0,t.zw)(l.title),3)]})),_:2},1032,["href"])])})),256))],512)),[[t.F8,k.value===l.group]]):(0,t.kq)("",!0)])):((0,t.wg)(),(0,t.iD)("div",v,[l.route?((0,t.wg)(),(0,t.j4)((0,t.SU)(a.rU),{key:0,href:e.route(l.route),class:(0,t.C_)(["flex flex-row items-center h-10 px-3 rounded-lg",{"text-gray-700 bg-gray-100":(0,t.SU)(r).includes(l.group),"text-gray-300 hover:bg-gray-100 hover:text-gray-700":!(0,t.SU)(r).includes(l.group)}])},{default:(0,t.w5)((function(){return[x,(0,t._)("span",w,(0,t.zw)(l.title),1)]})),_:2},1032,["href","class"])):((0,t.wg)(),(0,t.iD)("span",b,(0,t.zw)(l.title),1))]))])})),256)),(0,t._)("li",_,[(0,t._)("a",{href:e.route("logout"),class:"flex flex-row items-center w-full h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"},y,8,h)])])])],2)}}};var V=(0,t._)("svg",{"aria-hidden":"true",class:"flex-shrink-0 w-5 h-5",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[(0,t._)("path",{"fill-rule":"evenodd",d:"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z","clip-rule":"evenodd"})],-1),U=(0,t._)("span",{class:"sr-only"},"Info",-1),C={class:"ml-3 text-sm font-medium"},S=(0,t._)("span",{class:"text-green-800 text-red-800 text-yellow-800 bg-green-50 bg-yellow-50 bg-red-50"},null,-1);const D={__name:"Alert",setup:function(e){var l=(0,t.Fl)((function(){return(0,a.qt)().props.flash.message}));return function(e,r){return(0,t.SU)(l).text?((0,t.wg)(),(0,t.iD)("div",{key:0,class:(0,t.C_)(["flex p-4 mb-4 rounded-lg","text-".concat((0,t.SU)(l).status,"-800 bg-").concat((0,t.SU)(l).status,"-50")]),role:"alert"},[V,U,(0,t._)("div",C,(0,t.zw)((0,t.SU)(l).text),1),S],2)):(0,t.kq)("",!0)}}};var M={class:"flex flex-row min-h-screen bg-gray-100 text-gray-800"},q={class:"main flex flex-col flex-grow -ml-80 md:ml-0 transition-all duration-150 ease-in"},z={class:"header bg-white shadow py-4 px-4"},H={class:"header-content flex items-center flex-row"},W={class:"-mr-2 flex items-center sm:hidden"},Z={class:"h-6 w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},j={class:"flex ml-auto"},B={href:"",class:"flex flex-row items-center"},F=(0,t._)("img",{src:"https://pbs.twimg.com/profile_images/378800000298815220/b567757616f720812125bfbac395ff54_normal.png",alt:"",class:"h-10 w-10 bg-gray-200 border rounded-full"},null,-1),L={class:"flex flex-col ml-2"},A={class:"truncate w-20 font-semibold tracking-wide leading-none"},E=(0,t._)("span",{class:"truncate w-20 text-gray-500 text-xs leading-none mt-1"},"Manager",-1),I={class:"main-content flex flex-col flex-grow p-4"},K=(0,t._)("footer",{class:"footer px-4 py-6"},[(0,t._)("div",{class:"footer-content"},[(0,t._)("p",{class:"text-sm text-gray-600 text-center"},"© Dforce admin 2023. All rights reserved.")])],-1);const O={__name:"Authenticated",setup:function(e){var l=(0,t.iH)(!1);return function(e,r){return(0,t.wg)(),(0,t.iD)("div",M,[(0,t.Wm)((0,t.SU)(k)),(0,t._)("main",q,[(0,t._)("header",z,[(0,t._)("div",H,[(0,t._)("div",W,[(0,t._)("button",{onClick:r[0]||(r[0]=function(e){return l.value=!l.value}),class:"inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"},[((0,t.wg)(),(0,t.iD)("svg",Z,[(0,t._)("path",{class:(0,t.C_)({hidden:l.value,"inline-flex":!l.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),(0,t._)("path",{class:(0,t.C_)({hidden:!l.value,"inline-flex":l.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])]),(0,t._)("div",j,[(0,t._)("a",B,[F,(0,t._)("span",L,[(0,t._)("span",A,(0,t.zw)(e.$page.props.auth.user.name),1),E])])])])]),(0,t._)("div",I,[(0,t.Wm)((0,t.SU)(D)),(0,t.WI)(e.$slots,"default")]),K])])}}}},8529:(e,l,r)=>{r.r(l),r.d(l,{default:()=>g});var t=r(5548),a=r(7864),n=r(8748),o=r(7501),s=r(7290),i=r(393),u=r(8145),d=(0,t._)("h1",{class:"font-bold text-2xl text-gray-700 flex items-center"}," Edit rule ",-1),c={class:"flex flex-col flex-grow bg-white rounded mt-4 p-4"},m=["onSubmit"],p=(0,t._)("button",{type:"submit",class:"text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"}," Update ",-1);const g={__name:"Edit",props:{item:Object,itemLangs:Object,errors:Object},setup:function(e){var l=e,r=(0,t.Fl)((function(){return(0,n.qt)().props.languages})),g=(0,t.iH)("main"),f=(0,t.iH)(l.item),v=(0,t.iH)(l.itemLangs);var x=function(){n.Nd.post(route("admin.seo-rule.update",{seo_rule:l.item.id}),{_method:"patch",data:f.value,dataLangs:v.value})};return function(l,w){return(0,t.wg)(),(0,t.iD)(t.HY,null,[(0,t.Wm)((0,t.SU)(n.Fb),{title:"Edit rule"}),(0,t.Wm)(a.Z,null,{default:(0,t.w5)((function(){return[d,(0,t._)("div",c,[(0,t._)("form",{onSubmit:(0,t.iM)(x,["prevent"])},[(0,t.Wm)((0,t.SU)(u.Z),{modelValue:g.value,"onUpdate:modelValue":w[0]||(w[0]=function(e){return g.value=e})},null,8,["modelValue"]),(0,t._)("div",{class:(0,t.C_)(["grid grid-cols-1 gap-2 w-full py-4",{hidden:"main"!==g.value}])},[(0,t.Wm)((0,t.SU)(i.Z),{class:"mb-3",name:"url",type:"text",errors:e.errors,label:"Url",modelValue:f.value.url,"onUpdate:modelValue":w[1]||(w[1]=function(e){return f.value.url=e})},null,8,["errors","modelValue"]),(0,t.Wm)((0,t.SU)(s.Z),{modelValue:f.value.status,"onUpdate:modelValue":w[2]||(w[2]=function(e){return f.value.status=e}),label:"Status"},null,8,["modelValue"])],2),((0,t.wg)(!0),(0,t.iD)(t.HY,null,(0,t.Ko)((0,t.SU)(r),(function(l){return(0,t.wg)(),(0,t.iD)("div",{class:(0,t.C_)(["grid grid-cols-1 gap-2 w-full py-4",{hidden:g.value!==l.code}])},[(0,t.Wm)((0,t.SU)(i.Z),{class:"mb-3",name:"meta_title-"+l.code,errors:e.errors,label:"Meta title",modelValue:v.value[l.code].meta_title,"onUpdate:modelValue":function(e){return v.value[l.code].meta_title=e}},null,8,["name","errors","modelValue","onUpdate:modelValue"]),(0,t.Wm)((0,t.SU)(i.Z),{class:"mb-3",name:"meta_description-"+l.code,errors:e.errors,label:"Meta description",modelValue:v.value[l.code].meta_description,"onUpdate:modelValue":function(e){return v.value[l.code].meta_description=e}},null,8,["name","errors","modelValue","onUpdate:modelValue"]),(0,t.Wm)((0,t.SU)(i.Z),{class:"mb-3",name:"meta_keywords-"+l.code,errors:e.errors,label:"Meta keywords",modelValue:v.value[l.code].meta_keywords,"onUpdate:modelValue":function(e){return v.value[l.code].meta_keywords=e}},null,8,["name","errors","modelValue","onUpdate:modelValue"]),(0,t.Wm)((0,t.SU)(i.Z),{class:"mb-3",name:"social_name-"+l.code,errors:e.errors,label:"Social title",modelValue:v.value[l.code].social_name,"onUpdate:modelValue":function(e){return v.value[l.code].social_name=e}},null,8,["name","errors","modelValue","onUpdate:modelValue"]),(0,t.Wm)((0,t.SU)(i.Z),{class:"mb-3",name:"social_link-"+l.code,errors:e.errors,label:"Social link",modelValue:v.value[l.code].social_link,"onUpdate:modelValue":function(e){return v.value[l.code].social_link=e}},null,8,["name","errors","modelValue","onUpdate:modelValue"]),(0,t.Wm)((0,t.SU)(i.Z),{class:"mb-3",name:"social_description-"+l.code,errors:e.errors,label:"Social description",modelValue:v.value[l.code].social_description,"onUpdate:modelValue":function(e){return v.value[l.code].social_description=e}},null,8,["name","errors","modelValue","onUpdate:modelValue"]),(0,t.Wm)((0,t.SU)(i.Z),{class:"mb-3",name:"social_site_name-"+l.code,errors:e.errors,label:"Social site name",modelValue:v.value[l.code].social_site_name,"onUpdate:modelValue":function(e){return v.value[l.code].social_site_name=e}},null,8,["name","errors","modelValue","onUpdate:modelValue"]),(0,t.Wm)((0,t.SU)(o.Z),{class:"mb-3",name:"social_image-"+l.code,errors:e.errors,label:"Social image",preview:v.value[l.code].social_image,modelValue:v.value[l.code].social_image,"onUpdate:modelValue":function(e){return v.value[l.code].social_image=e}},null,8,["name","errors","preview","modelValue","onUpdate:modelValue"])],2)})),256)),p],40,m)])]})),_:1})],64)}}}}}]);