<div class="container popup">
    <div class="row">
        <div class="col-6 col-lg-3 text-left add_user">
            <h2>Add Contact</h2>
        </div>
        <div class="col-6 col-lg-9 text-right">
            <span class="close exit"></span>
        </div>
    </div>
    <div class="row personal_contacts">
        <div class="col-3 col-lg-1 text-right">
            <i class="fas fa-clipboard-list"></i>
        </div>
        <div class="col-9 col-lg-4 text-left">
            <p>PERSONAL CONTACTS</p>
        </div>
    </div>
    <form method="post" action="<?php echo e(route('add')); ?>" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="row">
            <div class="col-12 col-lg-2 text-left">
                <p>First Name</p>
            </div>
            <div class="col-12 col-lg-4">
                <input type="text" name="name" value="<?php echo e(old('name')); ?>">
                <?php if($errors->has('name')): ?>
                    <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-3 text-left">
                <p>Personnal email</p>
            </div>
            <div class="col-12 col-lg-3">
                <input type="email" name="email" value="<?php echo e(old('email')); ?>">
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-2 text-left">
                <p>Last Name</p>
            </div>
            <div class="col-12 col-lg-4">
                <input type="text" name="last_name"  value="<?php echo e(old('last_name')); ?>">
                <?php if($errors->has('last_name')): ?>
                    <span class="help-block">
                            <strong><?php echo e($errors->first('last_name')); ?></strong>
                        </span>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-3 text-left">
                <p>Personnal phone</p>
            </div>
            <div class="col-12 col-lg-3">
                <input type="text" name="phone" value="<?php echo e(old('phone')); ?>">
                <?php if($errors->has('phone')): ?>
                    <span class="help-block">
                            <strong><?php echo e($errors->first('phone')); ?></strong>
                        </span>
                <?php endif; ?>
            </div>
            <div class="col-4 col-lg-2 text-left">
                <p>Photo</p>
            </div>
            <div class="col-6 col-lg-4 upload">
                <label for="photo"></label>
                <input type="file" name="photo"  value="<?php echo e(old('photo')); ?>">
                <?php if($errors->has('photo')): ?>
                    <span class="help-block">
                            <strong><?php echo e($errors->first('photo')); ?></strong>
                        </span>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-3 text-left">
                <p>Personnal address</p>
            </div>
            <div class="col-12 col-lg-3">
                <input type="text" name="address" value="<?php echo e(old('address')); ?>">
                <?php if($errors->has('address')): ?>
                    <span class="help-block">
                            <strong><?php echo e($errors->first('address')); ?></strong>
                        </span>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-2 text-left">
                <p>Date of Birth</p>
            </div>
            <div class="col-12 col-lg-10">
                <input type="date" name="birthday" min="1900-01-01" value="<?php echo e(old('birthday')); ?>">
                <?php if($errors->has('birthday')): ?>
                    <span class="help-block">
                            <strong><?php echo e($errors->first('birthday')); ?></strong>
                        </span>
                <?php endif; ?>
            </div>
            
            
            
            
            
            
            <div class="col-12 col-lg-2 text-left">
                <p>Date of Death</p>
            </div>
            <div class="col-12 col-lg-10">
                <input type="date" name="death"   value="<?php echo e(old('death')); ?>">
            </div>
            <div class="col-3 col-lg-1 text-left">
                <p>Sex</p>
            </div>
            <div class="col-9 col-lg-11 check">
                <input class="checkbox" type="radio" name="sex" value="male">
                <label >Male</label>
                <input class="checkbox" type="radio" name="sex" value="female">
                <label>Female</label>
                <?php if($errors->has('sex')): ?>
                    <span class="help-block">
                            <strong><?php echo e($errors->first('sex')); ?></strong>
                        </span>
                <?php endif; ?>
            </div>
        </div>
        <hr/>
        <div class="row personal_contacts">
            <div class="col-3 col-lg-1 text-right phone_book">
                <img src="img/phone-book.png" alt="книга">
            </div>
            <div class="col-9 col-lg-11 text-left contacts">
                <p>CONTACTS</p>
            </div>
        </div>
        <div class="row add_contacts">
            <div class="col-12 col-lg-2">
                <p>Add Contacts</p>
            </div>
            <div class="col-12 col-lg-10">
                
                <select name="parent_id" size="1">
                    <option selected></option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?> <?php echo e($user->last_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="row confirm_or_chancel text-center">
            <div class=" col-5 col-lg-2">
                <button class="confirm" type="submit" name="add users">Add Contact</button>
            </div>
            <div class="col-7 col-lg-2">
                <button class="chancel exit" type="button" name="Chancel">Cancel</button>
            </div>
        </div>
    </form>
</div>







 <div class="container user-data-popup edit-popup">
     <div class="row">
         <div class="col-6 col-lg-3 text-left add_user">
             <h2>Update Contact</h2>
         </div>
         <div class="col-6 col-lg-9 text-right">
             <span class="close exit"></span>
         </div>
     </div>
     <div class="row personal_contacts">
         <div class="col-3 col-lg-1 text-right">
             <i class="fas fa-clipboard-list"></i>
         </div>
         <div class="col-9 col-lg-4 text-left">
             <p>PERSONAL CONTACTS</p>
         </div>
     </div>
     <form method="post" action="<?php echo e(route('update_push')); ?>" enctype="multipart/form-data">
         <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
         <input class="id" type="hidden" name="id" value="">
         <div class="row">
             <div class="col-12 col-lg-2 text-left">
                 <p>First Name</p>
             </div>
             <div class="col-12 col-lg-4">
                 <input class="qw" type="text" name="name" value="<?php echo e(old('name')); ?>">
                 <?php if($errors->has('name')): ?>
                     <span class="help-block">
                         <strong><?php echo e($errors->first('name')); ?></strong>
                     </span>
                 <?php endif; ?>
             </div>
             <div class="col-12 col-lg-3 text-left">
                 <p>Personnal email</p>
             </div>
             <div class="col-12 col-lg-3">
                 <input type="email" name="email" value="<?php echo e(old('email')); ?>">
                 <?php if($errors->has('email')): ?>
                     <span class="help-block">
                         <strong><?php echo e($errors->first('email')); ?></strong>
                     </span>
                 <?php endif; ?>
             </div>
             <div class="col-12 col-lg-2 text-left">
                 <p>Last Name</p>
             </div>
             <div class="col-12 col-lg-4">
                 <input type="text" name="last_name"  value="<?php echo e(old('last_name')); ?>">
                 <?php if($errors->has('last_name')): ?>
                     <span class="help-block">
                         <strong><?php echo e($errors->first('last_name')); ?></strong>
                     </span>
                 <?php endif; ?>
             </div>
             <div class="col-12 col-lg-3 text-left">
                 <p>Personnal phone</p>
             </div>
             <div class="col-12 col-lg-3">
                 <input type="text" name="phone" value="<?php echo e(old('phone')); ?>">
                 <?php if($errors->has('phone')): ?>
                     <span class="help-block">
                         <strong><?php echo e($errors->first('phone')); ?></strong>
                     </span>
                 <?php endif; ?>
             </div>
             <div class="col-4 col-lg-2 text-left">
                 <p>Photo</p>
             </div>
             <div class="col-6 col-lg-4 upload">
                 <label for="photo"></label>
                 <input type="file" name="photo"  value="<?php echo e(old('photo')); ?>">
                 <?php if($errors->has('photo')): ?>
                     <span class="help-block">
                         <strong><?php echo e($errors->first('photo')); ?></strong>
                     </span>
                 <?php endif; ?>
             </div>
             <div class="col-12 col-lg-3 text-left">
                 <p>Personnal address</p>
             </div>
             <div class="col-12 col-lg-3">
                 <input type="text" name="address" value="<?php echo e(old('address')); ?>">
                 <?php if($errors->has('address')): ?>
                     <span class="help-block">
                         <strong><?php echo e($errors->first('address')); ?></strong>
                     </span>
                 <?php endif; ?>
             </div>
             <div class="col-12 col-lg-2 text-left">
                 <p>Date of Birth</p>
             </div>
             <div class="col-12 col-lg-10">
                 <input type="date" name="birthday" min="1900-01-01" value="<?php echo e(old('birthday')); ?>">
                 <?php if($errors->has('birthday')): ?>
                     <span class="help-block">
                         <strong><?php echo e($errors->first('birthday')); ?></strong>
                     </span>
                 <?php endif; ?>
             </div>
             
             
             
             
             
             
             <div class="col-12 col-lg-2 text-left">
                 <p>Date of Death</p>
             </div>
             <div class="col-12 col-lg-10">
                 <input type="date" name="death" max="2018-12-31"  value="<?php echo e(old('death')); ?>">
             </div>
             <div class="col-3 col-lg-1 text-left">
                 <p>Sex</p>
             </div>
             <div class="col-9 col-lg-11 check">
                 <input class="checkbox" type="radio" name="sex" value="male">
                 <label >Male</label>
                 <input class="checkbox" type="radio" name="sex" value="female">
                 <label>Female</label>
                 <?php if($errors->has('sex')): ?>
                     <span class="help-block">
                         <strong><?php echo e($errors->first('sex')); ?></strong>
                     </span>
                 <?php endif; ?>
             </div>
         </div>
         <hr/>
         <div class="row personal_contacts">
             <div class="col-3 col-lg-1 text-right phone_book">
                 <img src="img/phone-book.png" alt="книга">
             </div>
             <div class="col-9 col-lg-11 text-left contacts">
                 <p>CONTACTS</p>
             </div>
         </div>
         <div class="row add_contacts">
             <div class="col-12 col-lg-2">
                 <p>Add Contacts</p>
             </div>
             <div class="col-12 col-lg-10">
                 
                 <select name="parent_id" size="1">
                     <option selected></option>
                     <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?> <?php echo e($user->last_name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
             </div>
         </div>
         <hr>
         
         
         
         
         
         
         
         
         
         
         
         
         
         <div class="row confirm_or_chancel text-center">
             <div class=" col-5 col-lg-2">
                 <button class="confirm" type="submit" name="add users">Update Contact</button>
             </div>
             <div class="col-7 col-lg-2">
                 <button class="chancel exit" type="button" name="Chancel">Cancel</button>
             </div>
         </div>
     </form>
 </div>