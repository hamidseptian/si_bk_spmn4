        <form action="form/login/login_act.php" method="post">
        	<div class="form-group">
        		<label>Username</label>
        		<input type="text" class="form-control" placeholder="Username" name="username">
        	</div>
        	<div class="form-group">
        		<label>Password</label>
        		<input type="password" class="form-control" placeholder="Password" name="password">
        	</div>
        	<div class="form-group">
        		<label>Hak Akses</label>
			        <select class="form-control" name="level">
				          <?php $level = ['Siswa'=>'Siswa / Orang Tua','Guru BK'=>'Guru BK','Kepala Sekolah'=>'Kepala Sekolah'];
				          foreach ($level as $k=> $v) { ?>
					          <option value="<?php echo $k ?>"><?php echo $v ?></option>
				          <?php } ?>
			        </select>
        	</div>
        	<div class="form-group">
        		<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        	</div>
        </form>
      
      