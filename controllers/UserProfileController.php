<?php

namespace App\Controllers;


use App\Core\Role\UserRoleController;
use App\Models\UserModel;


class UserProfileController extends UserRoleController{



    public function show($id){
      
        $user = new UserModel($this->getDatabaseConnection());
        $client = $user->getById($id);
        $change=$this->getSession()->get('success_edit');
     
        if($client->role=='client'){
            $this->set('client',$client);
            $this->set('change',$change);
        }
        
        $this->getSession()->remove('success_edit');
        $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);
      
    } 


    public function edit($id){
        $doctors=$this->getJson('caregiver_data.json');
        $this->set('doctors',$doctors);
    }

    public function update($id){

        $userModel = new UserModel($this->getDatabaseConnection());
        $user = $userModel->getById($id);
        $pass=$user->password_hash;
        $user_phone = $user->phone;
        $user_name= $user->name;
        $user_surname=$user->surname;
        
        $old_password = filter_input(INPUT_POST,'old_password');
        $new_password = filter_input(INPUT_POST,'new_password');
        $fullName = filter_input(INPUT_POST, 'new_name');
        $phone=filter_input(INPUT_POST,'phone');
    
            
        if (!empty($old_password) && !password_verify($old_password, $pass)) {
            $this->set('old_password', 'Invalid old password');
            return;
        }
        $pass_hash = !empty($new_password) ? password_hash($new_password, PASSWORD_DEFAULT) : $pass;
    
        $nameParts = explode(' ', $fullName);
    
    
        $firstName = $nameParts[0];
        $lastName = isset($nameParts[1]) ? $nameParts[1] : ''; 
    
        if(!empty($fullName)){
            $first_name = $firstName;
            $last_name = $lastName;
        }else{
            $first_name=$user_name;
            $last_name=$user_surname;
        }
    
        if(!empty($phone)){
            $phone_input = $phone;
        }else{
            $phone_input = $user_phone;
        }
        


        
        $editData=[
            'name'=>$first_name,
            'surname'=>$last_name,
            'phone'=> $phone_input,
            'password_hash'=>$pass_hash
        ];
    
        
        $edit = $userModel->editById($id,$editData);
    
        if(!$edit){
            $this->set("message", "Nije moguce izmeti profile");
            return;
        }

        $this->getSession()->put('success_edit',"Successfully changed data");
        $this->getSession()->save();

        $this->redirect("/client/profile/".$id);

         
    }
    public function destroy($id){
        $userModel = new UserModel($this->getDatabaseConnection());
        $client = $userModel->deleteById($id);

            $this->getSession()->put('success_delete',"Successfully deleted your profile");
            $this->getSession()->save();
            $this->getSession()->remove("user_id");
            $this->getSession()->save();
            
            $this->redirect('/');
        
   }


    public function logout() {
        $this->getSession()->remove("user_id");
        $this->getSession()->save();

        sleep(2); 

        $this->redirect('/');
    }

    





}









