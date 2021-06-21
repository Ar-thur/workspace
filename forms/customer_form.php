<fieldset>
    <div class="form-group">
        <label for="f_name">First Name *</label>
          <input type="text" name="f_name" value="<?php echo htmlspecialchars($edit ? $customer['f_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="First Name" class="form-control" required="required" id = "f_name" >
    </div> 

    <div class="form-group">
        <label for="l_name">Last name *</label>
        <input type="text" name="l_name" value="<?php echo htmlspecialchars($edit ? $customer['l_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div> 

    <div class="form-group">
        <label>Gender * </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="male" <?php echo ($edit &&$customer['gender'] =='male') ? "checked": "" ; ?> required="required"/> Male
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="female" <?php echo ($edit && $customer['gender'] =='female')? "checked": "" ; ?> required="required" id="female"/> Female
        </label>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
          <textarea name="address" placeholder="Address" class="form-control" id="address"><?php echo htmlspecialchars(($edit) ? $customer['address'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div> 
    
    <div class="form-group">
        <label for="email">Email</label>
            <input  type="email" name="email" value="<?php echo htmlspecialchars($edit ? $customer['email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="E-Mail Address" class="form-control" id="email">
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input name="phone" value="<?php echo htmlspecialchars($edit ? $customer['phone'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="+263123456789" class="form-control"  type="text" id="phone" required>
            </div> 
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">WhatsApp Number</label>
                <input name="whatsapp_number" value="<?php echo htmlspecialchars($edit ? $customer['whatsapp_number'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="+263123456789" class="form-control"  type="text" id="phone">
            </div> 
        </div>
    </div>
    

    <div class="form-group">
        <label>Company Name</label>
        <input name="company" value="<?php echo htmlspecialchars($edit ? $customer['company'] : '', ENT_QUOTES, 'UTF-8'); ?>"  placeholder="Company Name" class="form-control"  type="text">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
