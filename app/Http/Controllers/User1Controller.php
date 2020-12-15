<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Response;
use App\Services\User1Service;
use DB;


Class User1Controller extends Controller {
   use ApiResponse;
   
 public $user1Service;


 public function __construct(User1Service $user1Service){
  $this->user1Service =$user1Service;
 }
 public function getUsers(){
    

  }
  public function index() {
    return $this->successResponse($this->user1Service->obtainUsers1());

  }
  public function addUser1(Request $request ){
    return $this->successResponse($this->user1Service->createUser1($request->all(),
      Response::HTTP_CREATED));
  }

  public function showId1($id){
    return $this->successResponse($this->user1Service->obtainUser1($id));
 }
 public function updateUser1(Request $request,$id){
    return $this->successResponse($this->user1Service->editUser1($request->all(),$id));
 }
 public function deleteUser1($id){
  return $this->successResponse($this->user1Service->deleteUser1($id));

 }
}
