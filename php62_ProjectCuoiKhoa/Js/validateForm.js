// Validate form
// REGISTER
function validateForm(){
    var objs = document.getElementsByClassName('form_control');
     // RÚT NGẮN CODE
     var objs = document.getElementsByClassName('form_control');
     for( var i = 0 ; i< objs.length; i++){
         var obj = objs[i];// duyệt từng object
         var value_obj = obj.value;// ip 1 = fullname , lấy ra giá trị của đt đó
         var attrName = obj.getAttribute('name');// lấy gt thuộc tính name
         var id_error = 'error_'+ attrName;// vd name ='name' -> error_name
         var obj_error = document.getElementById(id_error);
 
         var field_name = obj.getAttribute('feild-name');// lấy thuộc tính có tên field-name
         if(value_obj ==''){
             obj_error.innerHTML= 'Vui lòng nhập ' + field_name;// hthi ra mh
         }else {
             obj_error.innerHTML='';
         }
     }
}