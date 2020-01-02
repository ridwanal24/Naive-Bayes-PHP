<div class="row">
   <div class="col-4"></div>
   <div class="col-4 rounded bg-white shadow p-4">
      <form action="" method="get">
         <div class="form-group">
            <label for="inputAge" required><small>Age</small></label>
            <input type="number" class="form-control" id="inputAge" name="age" placeholder="Your Age" required>
         </div>
         <div class="form-group">
            <label for="inputGender"><small>Gender</small></label>
            <select name="gender" id="inputGender" class="form-control">
               <option value="gender_male" selected>Male</option>
               <option value="gender_female">Female</option>
            </select>
         </div>
         <div class="form-group">
            <label for="inputEducation"><small>Education</small></label>
            <select name="education" id="inputEducation" class="form-control">
               <option value="edu_1" selected>Left school before 16 years old</option>
               <option value="edu_2" >Left school at 16 years old</option>
               <option value="edu_3" >Left school at 17 years old</option>
               <option value="edu_4" >Left school at 18 years old</option>
               <option value="edu_5" >Some college or university, no certificate or degree</option>
               <option value="edu_6" >Professional certificate/ diploma</option>
               <option value="edu_7" >University degree</option>
               <option value="edu_8" >Masters degree</option>
               <option value="edu_9" >Doctorate degree</option>
            </select>
         </div>
         <div class="form-group">
            <label for="inputNicotine"><small>Nicotine (Smooking)</small></label>
            <select name="nicotine" id="inputNicotine" class="form-control">
               <option value="nikotin_0" selected>Never Used</option>
               <option value="nikotin_1" >Used over a Decade Ago</option>
               <option value="nikotin_2" >Used in Last Decade</option>
               <option value="nikotin_3" >Used in Last Year</option>
               <option value="nikotin_4" >Used in Last Month</option>
               <option value="nikotin_5" >Used in Last Week</option>
               <option value="nikotin_6" >Used in Last Day</option>
            </select>
         </div>
         <div class="form-group">
            <label for="inputCaffein"><small>Caffeine (Coffee)</small></label>
            <select name="caffeine" id="inputCaffein" class="form-control">
               <option value="caffeine_0" selected>Never Used</option>
               <option value="caffeine_1" >Used over a Decade Ago</option>
               <option value="caffeine_2" >Used in Last Decade</option>
               <option value="caffeine_3" >Used in Last Year</option>
               <option value="caffeine_4" >Used in Last Month</option>
               <option value="caffeine_5" >Used in Last Week</option>
               <option value="caffeine_6" >Used in Last Day</option>
            </select>
         </div>
         <div class="form-group">
            <label for="inputChocolate"><small>Chocolate</small></label>
            <select name="chocolate" id="inputChocolate" class="form-control">
               <option value="choco_0" selected>Never Used</option>
               <option value="choco_1" >Used over a Decade Ago</option>
               <option value="choco_2" >Used in Last Decade</option>
               <option value="choco_3" >Used in Last Year</option>
               <option value="choco_4" >Used in Last Month</option>
               <option value="choco_5" >Used in Last Week</option>
               <option value="choco_6" >Used in Last Day</option>
            </select>
         </div>
         <div class="form-group">
            <label for="inputAlcohol"><small>Alcohol</small></label>
            <select name="alchohol" id="inputChocolate" class="form-control">
               <option value="alchohol_0" selected>Never Used</option>
               <option value="alchohol_1" >Used over a Decade Ago</option>
               <option value="alchohol_2" >Used in Last Decade</option>
               <option value="alchohol_3" >Used in Last Year</option>
               <option value="alchohol_4" >Used in Last Month</option>
               <option value="alchohol_5" >Used in Last Week</option>
               <option value="alchohol_6" >Used in Last Day</option>
            </select>
         </div>

         <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary float-right">
         </div>
      </form>
      <a class="btn btn-primary" href="page/akurasi.php">Akurasi</a>
   </div>
   <div class="col-4"></div>
</div>