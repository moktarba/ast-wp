function StatsFilter(t){return this.forceToSortByDesc="undefined"!=typeof t.forceToSortByDesc?t.forceToSortByDesc:!1,this.sortBy2Directions=["stats_top_domains"],this.from="undefined"!=typeof t.from?t.from:null,this.to="undefined"!=typeof t.to?t.to:null,this.lastDays="undefined"!=typeof t.lastDays?t.lastDays:null,this.formName="undefined"!=typeof t.formName?t.formName:null,this.block="undefined"!=typeof t.block?t.block:null,this.itemPerPage="undefined"!=typeof t.itemPerPage?t.itemPerPage:null,this.orderDirection="undefined"!=typeof t.sortDirection?t.sortDirection:"DESC",this.orderBy="undefined"!=typeof t.sortBy?t.sortBy:null,this.isInProgress=!1,this.submit=function(t,e){return t.preventDefault(),this.isInProgress&&wysijaLazyLoad.terminate(),this.moduleName=null,this.itemPerPage=null,this.setupLazyLoad(e),!1},this.doFilter=function(t,e){this.isInProgress&&wysijaLazyLoad.terminate(),this.isInProgress=!0,forceToSortByDesc=this.forceToSortByDesc,forceToSortByDesc&&-1!==this.sortBy2Directions.indexOf(this.block)&&(forceToSortByDesc=!1),blocks=this.block.split(" "),wysijaLazyLoad.options.data=[blocks[0]],wysijaLazyLoad.options.task=e.task,wysijaLazyLoad.options.filter={from:this.from,to:this.to,lastDays:this.lastDays,itemPerPage:this.itemPerPage,orderBy:this.orderBy,orderDirection:forceToSortByDesc?"DESC":this.orderDirection},"undefined"!=typeof blocks[1]&&jQuery.extend(wysijaLazyLoad.options.filter,{additionalParam:blocks[1]}),wysijaLazyLoad.init(function(e){var s;prevElement=jQuery(t).prev(),0===prevElement.length&&(s=jQuery(t).parent()),jQuery(t).fadeOut(400,function(){jQuery(this).remove(),"undefined"!=typeof s?jQuery(s).prepend(e.result):jQuery(e.result).insertAfter(prevElement)}),StatsFilter.instance.isInProgress=!1})},this.setupLazyLoad=function(t){var e=jQuery.extend([],wysijaStatisticVars.lazyLoad.blocks);e.length<=0||(this.isInProgress=!0,wysijaLazyLoad.options.data=e,wysijaLazyLoad.options.task=t.task,wysijaLazyLoad.options.filter={from:this.from,to:this.to,lastDays:this.lastDays},jQuery(t.targetContainer).empty(),wysijaLazyLoad.init(function(e,s){"undefined"!=typeof s&&0===s&&(StatsFilter.instance.isInProgress=!1),jQuery(t.targetContainer).append(e.result)}))},this.fromChange=function(t){this.from=t.target.value},this.toChange=function(t){this.to=t.target.value},this.lastDaysChange=function(t){this.lastDays=t},this.formValidate=function(){return!0},StatsFilter.instance=this,this}