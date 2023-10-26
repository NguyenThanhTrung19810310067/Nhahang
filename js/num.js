function plus(){
    num = parseInt($("#quantity").val());//lấy giá trị của ô input
    tem = num+1;//'cộng lên 1
    $("#quantity").val(tem);// gán lại giá trị
}
function minus(){
    num = parseInt($("#quantity").val());//lấy giá trị của ô input
    if(num>1){
        tem = num-1;//tru di 1
    }
    $("#quantity").val(tem);// gán lại giá trị 
}
function addCart(id){
    alert(id);
}