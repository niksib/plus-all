"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[896],{393:(e,t,r)=>{r.d(t,{Z:()=>o});var l=r(5548),n=["for"],s=["id","type","value","required","name"],a={key:0,class:"mt-2 text-sm text-red-600 dark:text-red-500"};const o={__name:"CustomInput",props:["modelValue","type","name","errors","label","required"],emits:["update:modelValue"],setup:function(e,t){var r=t.emit,o=e,i=(0,l.iH)(null);(0,l.bv)((function(){i.value.hasAttribute("autofocus")&&i.value.focus()}));var u=function(e){o.errors&&o.errors[o.name]&&(o.errors[o.name]=""),r("update:modelValue",e.target.value)};return function(t,r){return(0,l.wg)(),(0,l.iD)("div",null,[(0,l._)("label",{for:e.name,class:(0,l.C_)(["block mb-2 text-sm font-medium text-gray-900",{"text-red-700":e.errors&&e.errors[e.name]}])},(0,l.zw)(e.label),11,n),(0,l._)("input",{ref_key:"input",ref:i,id:e.name,type:e.type,value:e.modelValue,required:e.required,name:e.name,onInput:u,class:(0,l.C_)(["bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5",{"bg-red-50 border border-red-500 text-red-900 placeholder-red-700":e.errors&&e.errors[e.name]}])},null,42,s),e.errors&&e.errors[e.name]?((0,l.wg)(),(0,l.iD)("p",a,(0,l.zw)(e.errors[e.name]),1)):(0,l.kq)("",!0)])}}}},3195:(e,t,r)=>{r.d(t,{Z:()=>o});var l=r(5548),n=r(8748),s={key:0,class:"mx-4 my-6"},a={class:"inline-flex -space-x-px"};const o={__name:"Pagination",props:{links:Array},setup:function(e){return function(t,r){return e.links.length>3?((0,l.wg)(),(0,l.iD)("nav",s,[(0,l._)("ul",a,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(e.links,(function(t,r){return(0,l.wg)(),(0,l.iD)("li",{key:"pagination-link-"+r},[(0,l.Wm)((0,l.SU)(n.rU),{href:t.url,class:(0,l.C_)(["py-2 px-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700",{"text-blue-600 bg-blue-50":t.active,"rounded-l-lg":0===r,"rounded-r-lg":r===e.links.length-1}]),innerHTML:t.label},null,8,["href","class","innerHTML"])])})),128))])])):(0,l.kq)("",!0)}}}},7864:(e,t,r)=>{r.d(t,{Z:()=>O});var l=r(5548),n=r(8748),s=(0,l.uE)('<div class="sidebar-header w-80 flex items-center justify-center py-4"><div class="inline-flex"><a href="#" class="inline-flex flex-row items-center"><svg class="w-10 h-10 text-red-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.757 2.034a1 1 0 01.638.519c.483.967.844 1.554 1.207 2.03.368.482.756.876 1.348 1.467A6.985 6.985 0 0117 11a7.002 7.002 0 01-14 0c0-1.79.684-3.583 2.05-4.95a1 1 0 011.707.707c0 1.12.07 1.973.398 2.654.18.374.461.74.945 1.067.116-1.061.328-2.354.614-3.58.225-.966.505-1.93.839-2.734.167-.403.356-.785.57-1.116.208-.322.476-.649.822-.88a1 1 0 01.812-.134zm.364 13.087A2.998 2.998 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879.586.585.879 1.353.879 2.121s-.293 1.536-.879 2.121z" clip-rule="evenodd"></path></svg><span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">DForce admin</span></a></div></div>',1),a={class:"sidebar-content px-4 py-6"},o={class:"flex flex-col w-full"},i={class:"my-px"},u={key:0},d=["onClick"],c=(0,l._)("span",{class:"flex items-center justify-center text-lg text-gray-400"},[(0,l._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,l._)("path",{d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})])],-1),g={class:"ml-3"},m=(0,l._)("svg",{class:"w-6 h-6 ml-auto",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[(0,l._)("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),f={key:0,class:"bg-white rounded-lg"},x={class:"my-px"},p={key:1},h=(0,l._)("span",{class:"flex items-center justify-center text-lg text-gray-400"},[(0,l._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,l._)("path",{d:"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"})])],-1),v={class:"ml-3"},w={key:1,class:"flex font-medium text-sm text-gray-300 px-4 my-4 uppercase"},y={class:"my-px"},b=["href"],_=[(0,l._)("span",{class:"flex items-center justify-center text-lg text-red-400"},[(0,l._)("svg",{fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"h-6 w-6"},[(0,l._)("path",{d:"M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"})])],-1),(0,l._)("span",{class:"ml-3"},"Logout",-1)];const k={__name:"Sidebar",setup:function(e){var t=(0,l.iH)(!1),r=route().current(),k=(0,l.iH)(!1),U=(0,l.iH)([{route:"admin.dashboard",group:"admin.dashboard",title:"Головна"},{route:"admin.translations.index",group:"admin.translations",title:"Переклади"},{route:"admin.settings.index",group:"admin.settings",title:"Додаткові змінні"},{route:null,title:"Контент"},{route:"admin.banners.index",group:"admin.banners.index",title:"Банери"},{route:"admin.sliders.index",group:"admin.sliders.index",title:"Слайдери"},{route:"admin.file-manager",group:"admin.file-manager",title:"Файловий менеджер"},{route:"admin.seo-rule.index",group:"admin.seo-rule",title:"SEO правила"},{route:"admin.links.index",group:"admin.links",title:"Посилання"},{route:"admin.menu.index",group:"admin.menu",title:"Меню"},{route:null,title:"Управління"},{route:"admin.users.index",group:"admin.users",title:"Користувачі"},{route:"admin.roles.index",group:"admin.roles",title:"Ролі"}]);return(0,l.bv)((function(){})),function(e,C){return(0,l.wg)(),(0,l.iD)("aside",{class:(0,l.C_)(["sidebar w-80 md:shadow transform md:translate-x-0 transition-transform duration-150 ease-in bg-slate-500",{"-translate-x-full":!t.value}])},[s,(0,l._)("div",a,[(0,l._)("ul",o,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(U.value,(function(t){return(0,l.wg)(),(0,l.iD)("li",i,[t.sublist&&t.sublist.length>0?((0,l.wg)(),(0,l.iD)("div",u,[(0,l._)("div",{class:(0,l.C_)(["flex flex-row items-center h-10 px-3 rounded-lg cursor-pointer",{"text-gray-700 bg-gray-100":(0,l.SU)(r).includes(t.group),"text-gray-300 hover:bg-gray-100 hover:text-gray-700":!(0,l.SU)(r).includes(t.group)}]),onClick:function(e){return r=t.group,void(k.value===r?k.value=!1:k.value=r);var r}},[c,(0,l._)("span",g,(0,l.zw)(t.title),1),m],10,d),t.sublist&&t.sublist.length>0?(0,l.wy)(((0,l.wg)(),(0,l.iD)("ul",f,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(t.sublist,(function(t){return(0,l.wg)(),(0,l.iD)("li",x,[(0,l.Wm)((0,l.SU)(n.rU),{href:e.route(t.route,t.routeParams||[]),class:"flex flex-row items-center h-10 px-3 rounded-lg"},{default:(0,l.w5)((function(){return[(0,l._)("span",{class:(0,l.C_)(["ml-3",{"text-white bg-slate-500 rounded-lg px-3 w-full":(0,l.SU)(r)===t.route}])},(0,l.zw)(t.title),3)]})),_:2},1032,["href"])])})),256))],512)),[[l.F8,k.value===t.group]]):(0,l.kq)("",!0)])):((0,l.wg)(),(0,l.iD)("div",p,[t.route?((0,l.wg)(),(0,l.j4)((0,l.SU)(n.rU),{key:0,href:e.route(t.route),class:(0,l.C_)(["flex flex-row items-center h-10 px-3 rounded-lg",{"text-gray-700 bg-gray-100":(0,l.SU)(r).includes(t.group),"text-gray-300 hover:bg-gray-100 hover:text-gray-700":!(0,l.SU)(r).includes(t.group)}])},{default:(0,l.w5)((function(){return[h,(0,l._)("span",v,(0,l.zw)(t.title),1)]})),_:2},1032,["href","class"])):((0,l.wg)(),(0,l.iD)("span",w,(0,l.zw)(t.title),1))]))])})),256)),(0,l._)("li",y,[(0,l._)("a",{href:e.route("logout"),class:"flex flex-row items-center w-full h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"},_,8,b)])])])],2)}}};var U=(0,l._)("svg",{"aria-hidden":"true",class:"flex-shrink-0 w-5 h-5",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[(0,l._)("path",{"fill-rule":"evenodd",d:"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z","clip-rule":"evenodd"})],-1),C=(0,l._)("span",{class:"sr-only"},"Info",-1),D={class:"ml-3 text-sm font-medium"},S=(0,l._)("span",{class:"text-green-800 text-red-800 text-yellow-800 bg-green-50 bg-yellow-50 bg-red-50"},null,-1);const z={__name:"Alert",setup:function(e){var t=(0,l.Fl)((function(){return(0,n.qt)().props.flash.message}));return function(e,r){return(0,l.SU)(t).text?((0,l.wg)(),(0,l.iD)("div",{key:0,class:(0,l.C_)(["flex p-4 mb-4 rounded-lg","text-".concat((0,l.SU)(t).status,"-800 bg-").concat((0,l.SU)(t).status,"-50")]),role:"alert"},[U,C,(0,l._)("div",D,(0,l.zw)((0,l.SU)(t).text),1),S],2)):(0,l.kq)("",!0)}}};var M={class:"flex flex-row min-h-screen bg-gray-100 text-gray-800"},H={class:"main flex flex-col flex-grow -ml-80 md:ml-0 transition-all duration-150 ease-in"},j={class:"header bg-white shadow py-4 px-4"},W={class:"header-content flex items-center flex-row"},q={class:"-mr-2 flex items-center sm:hidden"},V={class:"h-6 w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},A={class:"flex ml-auto"},B={href:"",class:"flex flex-row items-center"},L=(0,l._)("img",{src:"https://pbs.twimg.com/profile_images/378800000298815220/b567757616f720812125bfbac395ff54_normal.png",alt:"",class:"h-10 w-10 bg-gray-200 border rounded-full"},null,-1),Z={class:"flex flex-col ml-2"},F={class:"truncate w-20 font-semibold tracking-wide leading-none"},Y=(0,l._)("span",{class:"truncate w-20 text-gray-500 text-xs leading-none mt-1"},"Manager",-1),I={class:"main-content flex flex-col flex-grow p-4"},K=(0,l._)("footer",{class:"footer px-4 py-6"},[(0,l._)("div",{class:"footer-content"},[(0,l._)("p",{class:"text-sm text-gray-600 text-center"},"© Dforce admin 2023. All rights reserved.")])],-1);const O={__name:"Authenticated",setup:function(e){var t=(0,l.iH)(!1);return function(e,r){return(0,l.wg)(),(0,l.iD)("div",M,[(0,l.Wm)((0,l.SU)(k)),(0,l._)("main",H,[(0,l._)("header",j,[(0,l._)("div",W,[(0,l._)("div",q,[(0,l._)("button",{onClick:r[0]||(r[0]=function(e){return t.value=!t.value}),class:"inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"},[((0,l.wg)(),(0,l.iD)("svg",V,[(0,l._)("path",{class:(0,l.C_)({hidden:t.value,"inline-flex":!t.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),(0,l._)("path",{class:(0,l.C_)({hidden:!t.value,"inline-flex":t.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])]),(0,l._)("div",A,[(0,l._)("a",B,[L,(0,l._)("span",Z,[(0,l._)("span",F,(0,l.zw)(e.$page.props.auth.user.name),1),Y])])])])]),(0,l._)("div",I,[(0,l.Wm)((0,l.SU)(z)),(0,l.WI)(e.$slots,"default")]),K])])}}}},7896:(e,t,r)=>{r.r(t),r.d(t,{default:()=>k});var l=r(5548),n=r(7864),s=r(8748),a=r(3195),o=r(393),i={class:"font-bold text-2xl text-gray-700 flex items-center"},u={class:"flex flex-col bg-white rounded mt-4"},d={class:"relative overflow-x-auto shadow-md sm:rounded-lg p-4"},c=(0,l._)("p",{class:"font-bold text-2xl mb-2 text-gray-700"},"Філтри",-1),g=["action"],m={class:"flex"},f=(0,l._)("div",{class:"mt-5"},[(0,l._)("input",{type:"submit",class:"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600",value:"Filter"})],-1),x={class:"flex flex-col flex-grow bg-white rounded mt-4"},p={class:"relative overflow-x-auto shadow-md sm:rounded-lg"},h={class:"w-full text-sm text-left text-gray-500"},v=(0,l._)("thead",{class:"text-xs text-gray-700 uppercase bg-gray-50"},[(0,l._)("tr",null,[(0,l._)("th",{scope:"col",class:"px-6 py-3"}," Ключ "),(0,l._)("th",{scope:"col",class:"px-6 py-3"}," Значення "),(0,l._)("th",{scope:"col",class:"px-6 py-3"}," Тип "),(0,l._)("th",{scope:"col",class:"px-6 py-3"},[(0,l._)("span",{class:"sr-only"},"Дії")])])],-1),w={scope:"row",class:"px-6 py-4 font-medium text-gray-900"},y={class:"px-6 py-4 text-gray-500"},b={class:"px-6 py-4 text-gray-500"},_={class:"px-6 py-4 text-right whitespace-nowrap"};const k={__name:"List",props:{items:Object,filters:Object},setup:function(e){var t=e,r=(0,l.iH)(t.filters);return function(t,k){return(0,l.wg)(),(0,l.iD)(l.HY,null,[(0,l.Wm)((0,l.SU)(s.Fb),{title:"Додаткові налаштування"}),(0,l.Wm)(n.Z,null,{default:(0,l.w5)((function(){return[(0,l._)("h1",i,[(0,l.Uk)(" Додаткові налаштування "),(0,l.Wm)((0,l.SU)(s.rU),{href:t.route("admin.settings.create"),class:"text-white bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-4 focus:ring-slate-300 font-medium rounded-full text-sm px-3 py-1 ml-3 text-center"},{default:(0,l.w5)((function(){return[(0,l.Uk)(" Створити ")]})),_:1},8,["href"])]),(0,l._)("div",u,[(0,l._)("div",d,[c,(0,l._)("form",{class:"flex flex-col w-full",action:t.route("admin.settings.index",{filters:e.filters.value})},[(0,l._)("div",m,[(0,l.Wm)(o.Z,{class:"mr-3 w-1/4",name:"key",type:"text",label:"Ключ",modelValue:r.value.key,"onUpdate:modelValue":k[0]||(k[0]=function(e){return r.value.key=e})},null,8,["modelValue"])]),f],8,g)])]),(0,l._)("div",x,[(0,l._)("div",p,[(0,l._)("table",h,[v,(0,l._)("tbody",null,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(e.items.data,(function(e,r){return(0,l.wg)(),(0,l.iD)("tr",{key:"table-item-"+r,class:"bg-white border-b"},[(0,l._)("th",w,(0,l.zw)(e.key),1),(0,l._)("td",y,(0,l.zw)(e.val),1),(0,l._)("td",b,(0,l.zw)(e.type),1),(0,l._)("td",_,[(0,l.Wm)((0,l.SU)(s.rU),{href:t.route("admin.settings.edit",{setting:e.id}),class:"py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200"},{default:(0,l.w5)((function(){return[(0,l.Uk)(" Редагувати ")]})),_:2},1032,["href"]),(0,l.Wm)((0,l.SU)(s.rU),{href:t.route("admin.settings.destroy",{setting:e.id}),method:"delete",as:"button",class:"py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-red-50 rounded-lg border border-gray-200 hover:bg-red-100 focus:z-10 focus:ring-4 focus:ring-gray-200"},{default:(0,l.w5)((function(){return[(0,l.Uk)(" Створити ")]})),_:2},1032,["href"])])])})),128))])]),(0,l.Wm)((0,l.SU)(a.Z),{links:e.items.links},null,8,["links"])])])]})),_:1})],64)}}}}}]);