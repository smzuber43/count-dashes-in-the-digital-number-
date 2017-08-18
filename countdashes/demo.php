<?php
/*
 * @category   Demo
 * @package    Count Dashes
 * @author     SMZuber <smzuber43@gmail.com>
 * @version    SVN: 1.0
 *  
 */
Class countDashes{
    protected $dashes='6255456476';

    public function ContDashes($str=''){
        if(strlen($str)<100){    
        $count_dashes=0;
            for($i=0; $i < strlen($str);$i++){
                $val=$str[$i];
                if(is_numeric($val) && strlen($str)< 100 ){
                $count_dashes =$count_dashes+$this->dashes[$val];
                }else{
                    return json_encode(array('status'=>'FALSE','msg'=>'Please enter only 0-9 degits '));
                }
            }
            return json_encode(array('status'=>'TRUE','result'=>$count_dashes));
        }else{
            return json_encode(array('status'=>'FALSE','msg'=>'String length should not more then 100'));
        }    
    }
}

$str=$_POST['strNumber'];// Give your string to calculate dashes
$dashecount= new countDashes();
echo $dashecount->ContDashes($str);