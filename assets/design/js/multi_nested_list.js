var button_auth = [];

$.each(menu, function(){
  if(this['menu_parent_code'] == null){
    $('#menu-parent').html(this['menu_desc']);
    $('.sidebar-nav').addClass(this['menu_code']);
    $('#menu-parent').attr('menu_alias', this['menu_alias']);
  }
});

var menu = '';
$.each(menu, function(){
  if(this['menu_parent_code'] == null){

  }else{

   $('.'+this['menu_parent_code']).append(
    '<li><a id="'+this['menu_alias']+'" class="menu-alias" href="'+$('#base_url').val()+this['menu_path']+'" menu_alias ="'+this['menu_alias']+'">'+this['menu_desc']+'</a>'+
        '<span class="child '+this['menu_code']+'"></span>'+//
        '</li>');

   if(this['menu_path'] !== null){
    var asd = this['menu_path'].replace(/\\/g, ",");
        // var kode = asd.split("/");
        console.log(asd);
        // console.log(kode);
      }
    }
  });

$('li').each(function(){
  $this = $(this);
  $this.find("span").has("li").addClass("parent-child");
  $this.find(".parent-child").has("li").replaceWith('<ul>' + $this.find(".parent-child").has("li").html() +'</ul>');
});

$('.child').not(':has(.child)').parent().removeClass("parent-child");


$(document).ready(function(){
  $('.menu-alias').removeClass('active');
  $('#' + localStorage.getItem('menu_alias')).addClass('active');
});