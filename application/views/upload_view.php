<html>
<head>
<title>Upload Form</title>
</head>
<body>
<?php echo heading("Encrypt Files using AESCrypt",3); ?>

<?php if(isset($error))echo $error;?>

<?php echo form_open_multipart('lockfile/do_upload');?>
<input type="file" name="userfile" size="20" />
<br /><br />
<input type="submit" value="upload" />
</form>
<div>
    <?php 
        if(isset($upload_data))
        {
            echo base_url().'do_upload/'.$upload_data;          
        }
    ?>
</div>
</body>
</html>