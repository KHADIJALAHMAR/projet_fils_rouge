<?php include_once APPROOT . '/views/inc/header.php'; ?>

<?php if (isset($_GET['success'])): ?>
<div class="alert alert-success content mx-auto my-5" role="alert">
  gard pharmacy added succefully
</div>
<?php endif; ?>

<div class="content mx-auto mt-4">
  <table class="table bg-white rounded shadow-sm  table-hover">
            <tr>
		            <th>ID</th>
		            <th>name_pharmacie</th>
		            <th>Localisation</th>
                    <th>phone</th>
                    <th>image</th>
                    <th>id_user</th>
                    <th>pharmacie de garde</th>
		           
		        </tr>
		    </thead>
            <tbody>
		        <tr id="d1">
                <?php 
                $cpt = 1;
                foreach ($data as $pharmacy):?>
		            <td id="f1"><?php echo $pharmacy->id_pharmacy ?></td>
		            <td id="l1"><?php echo $pharmacy->name_pharma ?></td>
		            <td id="m1"><?php echo $pharmacy->localisation ?></td>
                    <td id="m1"><?php echo $pharmacy->phone?></td>
                    <td id="m1"><?php echo $pharmacy->image ?></td>
                    <td id="m1"><?php echo $pharmacy->id_user ?></td>
                    <td id="m1"><a href="<?php echo URLROOT; ?>/ControllerAdmin/update_gard/<?php echo $pharmacy->id_pharmacy ?>" class="btn btn-primary">update to garde</a></td>
                    
                   
		        </tr>
                <?php 
                $cpt++;
                endforeach ; ?>
		    </tbody>
            </table>
 
</div>
