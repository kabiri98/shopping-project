<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Model\Comments;

use App\Roles;
use App\Models\Product;
use App\Models\Posts;
use App\Models\Photos;
use App\Models\Videos;

class ProductController extends Controller
{
    
    /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('auth');
           
          $this->middleware('Role');
          
        }
        
        public function showproduct() {
            $product=Product::all();
           return view('Admin.product.showproduct')->with('product',$product);
        }

       
         




  // ----update-----
  public function updateform(product $product,$id)
  {
      $editproduct=product::find($id);
      return view('Admin.product.updateform')->with('product',$editproduct);
  }

  public function updateproduct (Request $request, product $product,$id)
   {
      $product=product::find($id);
      $product->name=$request->post('name');
      $product->discription=$request->post('discription');
      $product->product_price=$request->post('product_price');
      $product->inventory=$request->post('inventory');
      $product->created_at=$request->post('created_at');
      $product->updated_at=$request->post('updated_at');
      $product->save();
       $request->session()->flash('success', '!محصول با موفقیت به روزرسانی شد');
       return redirect('admin/product/showproduct'); 
  }

  //  -------insert------
  public function insertform(){
      return view ('Admin.product.insertform');
  }
  
  public function insertproduct(Request $request)
  {
       $request->validate([
         
          'name'  =>  'required|string',
          'product_price' =>  'required|string',
          'inventory'  =>  'required|string',
         
          'discription'   =>  'string',
          'file'          =>  'nullable|max:2048|image',    //name of image field in form
      ]);
  
      //saving product's attribute
      $newProduct = new Product();
      $newProduct->name  =  $request->post('name');
      $newProduct->product_price =  $request->post('product_price');
    //   $newProduct->discount =  $request->post('discount');
      $newProduct->discription =  $request->post('discription');
      $newProduct->inventory =  $request->post('inventory');

    //   $newProduct->subcategory  =  $request->post('subcategory');
      $file=$request->file('imagefile'); //file yedoonas. chera files e? bayad request az type array bashe oonjori. 
  //mige in null e
      $newProduct->save();// aval bayad save beshe. bad axesh create mishe. 
      //alan yebar dg form ro  por konid
  
      //if($files->count() > 0){
        //foreach ($files as $file) {
            //$imagename=$file->getClientOriginalName();// name oon ax aslan lazem nist. ba store() khode laravel az file md5 migire.
            //in esme file ro az pc karbar migire. masalan age 2.jpg save karde boode bashe in 2.jpg ro mide.
            //khode laravel md5 migire age tekrari bashe nemikone. albate bayad check konid ke age nakard shoma ham be db ezafe nakonid.
            //$file->move('images/product',$imagename);
            //baraye ssave ax move nakonid.
            $imagepath = $file->store('images/product', 'public');// injori save konid hamishe
            // in public ke gozashtam baes mihe bere too pooshe public.
            // yani bejaye images/ bere too public/images/product.... 
            //chon linki ke zad az public/storage be storage/app/public hast. be storage/app/images nist.
            //in rahe standarde. mitoonid aslan beniz bere too public save beshe. bara amniate bala are bayad inkaro konid.
            
            //upload shode. are bayad address e storage ro bedid. vali dar halate aadi be storage dastresi nadare.
            $newProduct->photos()->create(['path'=>$imagepath,'imageble_id'=>$newProduct->id, 'imagable_type' => Product::class]);
            //chon az create estefade shode bayad bere too fillable
        //}
      //}
      $request->session()->flash('success', '!محصول با موفقیت ثبت شد');
          return redirect('admin/product/showproduct');
     
  }
  
   
//    public function insertproduct (Request $request) {

//        $product=new product();
//        $product->name=$request->post('name');
//        $product->email=$request->post('email');
//        $product->password=$request->post('password');
//        $product->save();
       
//        $request->session()->flash('success', 'Record successfully added!');
//        return redirect('admin/product/showproduct');
//    }
  //  -------delete----
   public function deleteform(product $product,$id){
       $deleteproduct=product::find($id);
       return view('Admin.product.deleteform')->with('product',$deleteproduct);
   }

   public function deleteproduct (Request $request, product $product,$id) {

       $product=product::find($id);
       $product->delete();
       $request->session()->flash('danger', 'محصول حذف شد');
       return redirect('admin/product/showproduct');
   }



 

   
    
}
