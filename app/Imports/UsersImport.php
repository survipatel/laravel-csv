<?php
  
namespace App\Imports;
  
use App\Models\User;
use App\Models\Financial_transdetail;
use App\Models\Financial_trans;
use App\Models\Feecollectiontype;
use App\Models\Feecategory;
use App\Models\Fee_types;
use App\Models\Entrymode;
use App\Models\Department;
use App\Models\Commom_fee_collection;
use App\Models\Commom_fee_collection_headwise;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
  
class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            //'name'     => $row['name'],
            //'email'    => $row['email'], 
            'date'     => $row[0],
            'academic' => $row[1],
            'session'  => $row[2],
            'alloted_category' => $row[3],
            'voucher_type'   => $row[4],
            'voucher_no'     => $row[5],
            'roll_no'        => $row[6],
            'admno/uniqid'    => $row[7],
            'status'        => $row[8],
            'fee_category'   => $row[9],
            'faculty'      => $row[10],
            'program'     => $row[11],
            'department'   => $row[12],
            'batch'       => $row[13],
            'receipt_no'   => $row[14],
            'fee_head'     => $row[15],
            'due_amount'  => $row[16],
            'paid_amount'   => $row[17],
            'conccession_amount'    => $row[18],
            'scholarship_amount'    => $row[19],
            'reverse_concession'    => $row[20],
            'write_off'             => $row[21],
            'adjusted_amount'       => $row[22],
            'refund_amount'         => $row[23],
            'fund_fransfer_amount'   => $row[24],
        
        ]);
    }


    // public function model(array $row)
    // {
    //     return new Financial_transdetail([
    
    //          'id'  => $row['name'],
    //     'moduleid'   => $row['name'],
    //      'financialTranId'    => $row['name'],
    //     'amount'   => $row['Paid Amount'],
    //      'brid'   => $row['name'],
    //     'headId'   => $row['name'],
    //      'crdr'   => $row['name'],
    //      'headName'  => $row['Fee Head'],
        
    //     ]);
    // }
    // public function model(array $row)
    // {
    //     return new Financial_trans([
           

    //      'id'   => $row['name'],
    //     'moduleid'   => $row['name'],
    //     'transId'  => $row['name'],
    //     'admno'    => $row['Admno'],
    //     'amount'   => $row['Paid Amount'],
    //      'crdr'   => $row['name'],
    //      'tranDate'   => $row['Date'],
    //      'acadYear'  => $row['Academic'],
    //     'Entrymode'   => $row['name'],
    //      'voucherno'    => $row['Voucher No'],
    //     'brid'   => $row['name'],
    //      'Type_of_consession'   => $row['name'], 
        
    //     ]);
    // }
    // public function model(array $row)
    // {
    //     return new Feecollectiontype([
           
    //          'id' => $row['name'],
    //     'collectionhead' => $row['name'],
    //     'collectiondesc'  => $row['name'],
    //     'brid'   => $row['name'],
        
    //     ]);
    // }
    // public function model(array $row)
    // {
    //     return new Feecategory([
    //         'id'   => $row['name'],
    //     'moduleid'   => $row['name'],
    //     'fee_category'   => $row['Fee Category'],
    //     'brid'   => $row['name'], 
        
    //     ]);
    // }
    // public function model(array $row)
    // {
    //     return new Fee_types([ 
    //         'id'    => $row['name'],
    //     'moduleid'    => $row['name'],
    //     'fee_category'    => $row['name'],
    //     'f_name'    => $row['Fee Head'],
    //     'collection_id'    => $row['name'],
    //      'sequenceNo'     => $row['Sr'],
    //      'feeTypeName'    => $row['Fee Head'],
    //      'feeTypeNameTall'    => $row['name'],
        
    //     ]);
    // }
    // public function model(array $row)
    // {
    //     return new Entrymode([
             
    //         'id'     => $row['name'],
    //     'Entry_modename'     => $row['name'],
    //      'crdr'    => $row['name'],
    //     'entrymodeno'     => $row['name'],
        
    //     ]);
    // }
    // public function model(array $row)
    // {
    //     return new Department([
    //         'id'     => $row['0'],
    //         'branches'    => $row['Department'], 
        
    //     ]);
    // }
}