<?php $title = 'add a tuto'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container">

        <h1 class="category-title" >Ajouter un tuo</h1>

        <div style='width: 40%;' class="mx-auto">
            <form action="./controller/addTuto.php?action=addTuto" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input name="tutoTitle" type="text" class="form-control blue-border" aria-describedby="emailHelp" placeholder="Votre titre" value="<?php if (isset($_GET['tutoTitle']) AND !empty($_GET['tutoTitle'])){echo $_GET['tutoTitle'];}?>">
                </div>

                <div class="form-group">
                    <label for="exampleTextarea">Description</label>
                    <textarea name="description" class="form-control blue-border" rows="3"><?php if(isset($_GET['description'])){echo $_GET['description'];} ?></textarea>
                </div>

                <label for="file" class="input_label">
            		<i class="fa fa-upload" aria-hidden="true"></i>
            		<span id="label_span">Header image</span>
            	</label>
            	<input id="file" type="file" name="file" aria-describedby="fileHelp">

                <div class="form-group">
                    <label for="exampleTextarea">Your tuto</label>
                    <textarea id=tutoInput name="content" class="form-control blue-border" rows="3"><?php if(isset($_GET['content'])){echo $_GET['content'];} ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleTextarea">Required equipment</label>
                    <table id="employee_table" class="dynamic-form">
                        <tr id="row1">
                            <td>
                                <input type="text" name="name[]">
                                <button type="button" onclick="add_row();" name="button"><img class="add-form" src="./public/img/icon/add-form.png"></button>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="form-group">
                    <label for="exampleTextarea">Categories</label>
                    <table id="employee_table" class="dynamic-form">
                        <tr id="row1">
                            <td>
                                <input type="text" name="name[]">
                                <button type="button" onclick="add_row();" name="button"><img class="add-form" src="./public/img/icon/add-form.png"></button>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="form-group">
                    <label for="exampleSelect1">Level</label>
                    <select name="level" class="form-control blue-border">
                    <option value="1">Easy</option>
                    <option value="2">Medium</option>
                    <option value="3">Advance</option>
                    <option value="4">Hardcore</option>
                    <option value="5">F**</option>
                    </select>
                </div>

                <div class="form-inline">
                    <input name="duration" class="form-control blue-border" type="number" value="42" id="example-number-input">
                    <select name="durationType" class="form-control blue-border ml-2">
                        <option value="1">mn</option>
                        <option value="2">h</option>
                        <option value="3">week</option>
                        <option value="4">month</option>
                    </select>
                </div>

                <?php if(isset($_GET['error']) && !empty($_GET['error'])){?>
                <div class="form-inline mt-3">
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_GET['error']; ?>
                    </div>
                </div>
                <?php } ?>


                <div class="form-group mx-auto text-center m-5 ">
                    <button type="submit" class="btn btn-primary cta">submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
</div>


<script type="text/javascript">
function add_row()
{
 $rowno=$("#employee_table tr").length;
 $rowno=$rowno+1;
 $("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='name[]' placeholder='Enter Name'><button type='button' onclick=delete_row('row"+$rowno+"'); name='button'><img class='rmv-form' src='./public/img/icon/remove-form.png'></td></tr>");
}
function delete_row(rowno)
{
 $('#'+rowno).remove();
}
</script>





<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php'); ?>
