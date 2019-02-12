<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user; //path of model
use App\category;
use App\admin;
use App\delivery_boy;
use App\menu;
use App\feedback;
use App\payment_type;
use App\orders;
use App\order_details;
use App\invoice;

class RootController extends Controller
{
    public function add(Request $request)
    {
    	//only print requested params
    	//save this data to table
    	$post=user::create([
   		"name"=>$request->name,
    	"password"=>$request->pwd,
       	"email"=>$request->email,
    	"contact"=>$request->contact,
    	"gender"=>$request->gender_m,
    	"address"=>$request->add1,
    	"address2"=>$request->add2,
    	"pincode"=>$request->p_code,
    	]);
    	return redirect('/examp');
    }
    //create show method here
    public function show(Request $request)
    {
    	//get all data from database
    	$searchkey='';
        $post=user::whereNotNull('uid');
        if(!empty($request->title))
        {
            $post=$post->where('name','LIKE','%'.$request->title.'%');
            $searchkey=$request->title;
        }
        $post=$post->get();
        //simple display all data
    	return view('disp_data')->with('postdata',$post)->with('searchkey',$searchkey);
    }
    //add delete mwthod here
    public function delete(Request $request,$id)
    {
    	//delete row
    	user::where('uid',$id)->delete();
    	return redirect('/disp_data');
    }
    //add update methos
    public function update(Request $request,$uid)
    {
        //get the data of this id from db
        $post=user::where('uid',$uid)->first();
        //print he data
        /*dd($post);*/
        //Pass thid data to update view
        return view('update')->with('post',$post);
    }
    public function saveUpdated(Request $request)
    {
        //update row
        user::where('uid',$request->uid)->update([
        'name'=>$request->name,
        'password'=>$request->pwd,
        'email'=>$request->email,
        'contact'=>$request->contact,
        'gender'=>$request->gender_m,
        'address'=>$request->add1,
        'address2'=>$request->add2,
        'pincode'=>$request->p_code
        ]);
        //redirect to table
        return redirect('disp_data');
    }
    public function add_cat(Request $request)
    {
        //print requested data
        $post=category::create([
        "cat_name"=>$request->c_name,
       ]);
        return redirect('/show_cat');
    }

    public function show_cat(Request $request)
    {
        $searchkey='';
        $post=category::whereNotNull('cat_id');
        if(!empty($request->title))
        {
            $post=$post->where('cat_name','LIKE','%'.$request->title.'%');
            $searchkey=$request->title;
        }
        $post=$post->get();
        //simple display all data

        return view('show_cat')->with('postdata',$post)->with('searchkey',$searchkey);

    }
    public function delete_cat(Request $request,$c_id)
    {
        category::where('cat_id',$c_id)->delete();
        return redirect('/show_cat');
    }
    public function update_cat(Request $request,$c_id)
    {
        $post=category::where('cat_id',$c_id)->first();
        return view('update_cat')->with('post',$post);
      /* dd($post);*/
    }
     public function saveUpdatedCat(Request $request)
    {
        //update row
        category::where('cat_id',$request->cat_id)->update([
        'cat_name'=>$request->c_name,
        ]);
        //redirect to table
        return redirect('show_cat');
    }
    public function add_admin(Request $request)
    {
        //print requested data
        $post=admin::create([
        "password"=>$request->pwd,
       ]);
        return redirect('/show_add');
    }
    public function show_add(Request $request)
    {
        $searchkey='';
        $post=admin::whereNotNull('a_id');
        if(!empty($request->title))
        {
            $post=$post->where('a_id','LIKE','%'.$request->title.'%');
            $searchkey=$request->title;
        }
        $post=$post->get();
        //simple display all data

        return view('show_add')->with('postdata',$post)->with('searchkey',$searchkey);
    }
    public function delete_add(Request $request,$a_id)
    {
        admin::where('a_id',$a_id)->delete();
        return redirect('/show_add');
    }
    public function update_add(Request $request,$a_id)
    {
        $post=admin::where('a_id',$a_id)->first();
        return view('update_add')->with('post', $post);
    }
   public function saveUpdatedAdd(Request $request)
    {
        admin::where('a_id',$request->a_id)->update([
            "password"=>$request->pwd,
        ]);
        return redirect('/show_add');
    }

    public function add_db(Request $request)
    {
        $post=delivery_boy::create([
            "a_id"=>$request->aid,
            "password"=>$request->pwd,
            "name"=>$request->name,
            "email"=>$request->email,
            "contact"=>$request->contact
        ]);
        return redirect('/show_delboy');
    }
    public function show_db(Request $request)
    {
       $searchkey='';
       $post=delivery_boy::whereNotNull('del_boy_id');
       if(!empty($request->title))
       {
        $post=$post->where('name','LIKE','%'.$request->title.'%');
        $searchkey=$request->title;
       }
       $post=$post->get();
       return view('show_delboy')->with('postdata',$post)->with('searchkey',$searchkey);
    }
    public function delete_db(Request $request,$d_id)
    {
        delivery_boy::where('del_boy_id',$d_id)->delete();
        return redirect('show_delboy');
    }
    public function update_db(Request $request,$d_id)
    {
        $post=delivery_boy::where('del_boy_id',$d_id)->first();
        return view('update_db')->with('post',$post);
    }
    public function saveUpdatedDB(Request $request)
    {
        delivery_boy::where('del_boy_id',$request->del_boy_id)->update([
            "a_id"=>$request->aid,
            "password"=>$request->pwd,
            "name"=>$request->name,
            "email"=>$request->email,
            "contact"=>$request->contact

        ]);
        return redirect('show_delboy');
    }

    public function item_add(Request $request)
    {
        $post=menu::create([
            "cat_id"=>$request->cat_id,
            "item_name"=>$request->i_name,
            "price"=>$request->i_price,
            "description"=>$request->desc,
        ]);
        return redirect('show_item');
    }
    public function item_show(Request $request)
    {
        $searchkey='';
       $post=menu::whereNotNull('item_id');
       if(!empty($request->title))
       {
        $post=$post->where('item_name','LIKE','%'.$request->title.'%');
        $searchkey=$request->title;
       }
       $post=$post->get();
       return view('show_item')->with('postdata',$post)->with('searchkey',$searchkey);
    }
    public function delete_item(Request $request,$i_id)
    {
        menu::where('item_id',$i_id)->delete();
        return redirect('show_item');
    }
    public function update_item(Request $request,$i_id)
    {
        $post=menu::where('item_id',$i_id)->first();
        return view('update_item')->with('post',$post);
    }
    public function saveUpdatedItem(Request $request)
    {
        menu::where('item_id',$request->item_id)->update([
            "cat_id"=>$request->cat_id,
            "item_name"=>$request->i_name,
            "price"=>$request->i_price,
            "description"=>$request->desc,
        ]);
        return redirect('/show_item');
    }

    public function feed_add(Request $request)
    {
        $post=feedback::create([
            "uid"=>$request->uid,
            "item_id"=>$request->item_id,
            "comment"=>$request->cmt,
            "date"=>$request->date,
        ]);
        return redirect('show_feed');
    }
    public function feed_show(Request $request)
    {
        $searchkey='';
        $post=feedback::whereNotNull('feed_id');
        if(!empty($request->title))
        {
            $post=$post->where('date','LIKE','%'.$request->title.'%');
            $searchkey=$request->title;
        }
        $post=$post->get();
        //simple display all data

        return view('show_feed')->with('postdata',$post)->with('searchkey',$searchkey);
    }
    public function delete_feed(Request $request,$f_id)
    {
        feedback::where('feed_id',$f_id)->delete();
        return redirect('show_feed');
    }
    public function update_feed(Request $request,$f_id)
    {
        $post=feedback::where('feed_id',$f_id)->first();
        return view('update_feed')->with('post',$post);
    }

    public function saveUpdatedFeed(Request $request)
    {
        feedback::where('feed_id',$request->feed_id)->update([
            "uid"=>$request->uid,
            "item_id"=>$request->item_id,
            "comment"=>$request->cmt,
            "date"=>$request->date,
        ]);
        return redirect('show_feed');
    }
    public function add_pType(Request $request)
    {
        $post=payment_type::create([
            "p_type"=>$request->p_type,
        ]);
        return redirect('show_ptype');
    }
    public function ptype_show(Request $request)
    {
        $post=payment_type::all();
        return view('show_ptype')->with('postdata',$post);
    }
    public function delete_ptype(Request $request,$pt_id)
    {
        payment_type::where('p_t_id',$pt_id)->delete();
        return redirect('show_ptype');
    }
    public function update_ptype(Request $request,$pt_id)
    {
         $post=payment_type::where('p_t_id',$pt_id)->first();
        return view('update_ptype')->with('post',$post);   
    }
    public function saveUpdatedPtype(Request $request)
    {
        payment_type::where('p_t_id',$request->p_t_id)->update([
            "p_type"=>$request->p_type,
        ]);
        return redirect('show_ptype');
    }

    public function add_order(Request $request)
    {
        $post=orders::create([
            "uid"=>$request->uid,
            "del_boy_id"=>$request->del_boy_id,
            "status"=>$request->status,
            "date"=>$request->date,
            "address"=>$request->add,
        ]);
        return redirect('/show_order');
    }

    public function order_show(Request $request)
    {
        $searchkey='';
        $post=orders::whereNotNull('order_id');
        if(!empty($request->title))
        {
            $post=$post->where('uid','LIKE','%'.$request->title.'%');
            $searchkey=$request->title;
        }
        $post=$post->get();
        //simple display all data

        return view('show_order')->with('postdata',$post)->with('searchkey',$searchkey);  
    }
     public function delete_order(Request $request,$o_id)
    {
        orders::where('order_id',$o_id)->delete();
        return redirect('show_order');
    }
    public function update_order(Request $request,$o_id)
    {
         $post=orders::where('order_id',$o_id)->first();
        return view('update_order')->with('post',$post);   
        
    }
    public function saveUpdatedOrder(Request $request)
    {
        orders::where('order_id',$request->order_id)->update([
            "uid"=>$request->uid,
            "del_boy_id"=>$request->del_boy_id,
            "status"=>$request->status,
            "date"=>$request->date,
            "address"=>$request->add,
        ]);
        return redirect('show_order');
    }
    public function add_odetail(Request $request)
    {
        $post=order_details::create([
            "order_id"=>$request->order_id,
            "item_id"=>$request->item_id,
            "quantity"=>$request->quant,
            
        ]);
        return redirect('show_odetail');
    }
    public function odetail_show(Request $request)
    {
       $searchkey='';
        $post=order_details::whereNotNull('o_d_id');
        if(!empty($request->title))
        {
            $post=$post->where('item_id','LIKE','%'.$request->title.'%');
            $searchkey=$request->title;
        }
        $post=$post->get();
        //simple display all data

        return view('show_odetail')->with('postdata',$post)->with('searchkey',$searchkey);  
    }
     public function delete_odetail(Request $request,$od_id)
    {
        order_details::where('o_d_id',$od_id)->delete();
        return redirect('show_odetail');
    }
     public function update_odetail(Request $request,$od_id)
    {
         $post=order_details::where('o_d_id',$od_id)->first();
        return view('update_odetail')->with('post',$post);   
        
    }
    public function saveUpdatedOdetail(Request $request)
    {
        order_details::where('o_d_id',$request->o_d_id)->update([
             "order_id"=>$request->order_id,
            "item_id"=>$request->item_id,
            "quantity"=>$request->quant,
        ]);
        return redirect('show_odetail');
    }
         public function inv_add(Request $request)
        {
            $post=invoice::create([
                "order_id"=>$request->order_id,
                "o_d_id"=>$request->o_d_id,
                "amount"=>$request->amt,
                "p_t_id"=>$request->p_t_id,
            ]);
            return redirect('show_inv');
        }
        public function inv_show(Request $request)
        {
            $searchkey='';
            $post=invoice::whereNotNull('inv_no');
            if(!empty($request->title))
            {
                $post=$post->where('inv_no','LIKE','%'.$request->title.'%');
                $searchkey=$request->title;
            }
            $post=$post->get();
            //simple display all data

            return view('show_inv')->with('postdata',$post)->with('searchkey',$searchkey);  
        }
        public function delete_inv(Request $request,$inv_id)
        {
            invoice::where('inv_no',$inv_id)->delete();
            return redirect('show_inv');
        }
         public function update_inv(Request $request,$inv_id)
        {
             $post=invoice::where('inv_no',$inv_id)->first();
            return view('update_inv')->with('post',$post);   
        }
         public function saveUpdatedInv(Request $request)
        {
            invoice::where('inv_no',$request->inv_no)->update([
                 "order_id"=>$request->order_id,
                "o_d_id"=>$request->o_d_id,
                "amount"=>$request->amt,
                "p_t_id"=>$request->p_t_id,
            ]);
            return redirect('show_inv');
        }
        public function checkout(Request $request)
        {
            // dd($request->all());
            return redirect('check_out?quantity_1='.$request->quantity_1.'&item_name_1='.$request->item_name_1.'&amount_1='.$request->amount_1);
        }
        public function o_place(Request $request)
        {
            return redirect('place_order');
        }
       
        public function o_confirm(Request $request)
        {
             return redirect('order_confirmation?quantity_1='.$request->quantity_1.'&item_name_1='.$request->item_name_1.'&amount_1='.$request->amount_1);
        }
}
