<?php

namespace App\Http\Controllers\Pages\Auth\AdminController;

use App\Http\Controllers\Pages\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Models\Bill;
use App\Models\BillDetail;
class BillController extends AuthController
{
    //
    public function getListBill() {
        $listbill = Bill::all();
        return view('admin.bills.listbills', compact('listbill'));
    }
    public function getDoneorNot($status) {
        $done = Bill::where('status',$status)->get();
        foreach ($done as $bdone) {
            echo"<tr>
            <td class='tm-product-name'>".$bdone->date_order."</td>
                <td onclick='detailbill(".$bdone->id.")' data-toggle='modal'
                data-target='#myModal2'>".$bdone->id."</td>
                <td>".$bdone->users->full_name."</td>
                <td>".$bdone->users->email."</td>
                <td>".$bdone->total."</td>
                <td>".$bdone->users->address."</td>
                <td>";
                if($bdone->status==1) {echo "Done";} 
                else { echo "Pendent" ;} "</td>";
                echo "
                <td>
                    <a  class='tm-product-delete-link'>
                        <i class='far fa-credit-card tm-product-delete-icon' onclick='setidbill(".$bdone->id.")' data-toggle='modal' data-target='#myModal1'></i>
                    </a>
                </td>
                <td>
                    <a  class='tm-product-delete-link'>
                        <i class='far fa-trash-alt tm-product-delete-icon' onclick='setidbill(".$bdone->id.")' data-toggle='modal' data-target='#myModal'></i>
                    </a>
                </td>
                
                
            </tr>";
        }
    }
    public function postDelBill($id) {
        DB::table('bills')
        ->where('id', '=', $id)->delete();
        
        DB::table('bill_detail')
        ->where('id_bill', '=', $id)->delete();
    }
    public function postDoneBill($id) {
        
        DB::table('bills')
        ->where('id','=',$id)
        ->update(['status'=>1]);
    }
    public function postDetailBill($id) {
        $detail = BillDetail::where('id_bill',$id)->get();
        $sl=1;
        foreach ($detail as $dt) {
            echo "STT:".$sl."<br>Mã sản phẩm:".$dt->id_product."<br>Số lượng:".$dt->quantity."<br>";
            echo "_____________________________________________<br>";
            $sl++;
        }
    }
}