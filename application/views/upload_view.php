<html>
<head>
<title>Upload Form</title>
</head>
<body>
<?php echo heading("Download and Decrypt Files using AESCrypt",3); ?>

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
			$url_aes = str_replace("=","",base64_encode('./uploads/'.$upload_data));					
            echo anchor(base_url().'lockfile/download/'.$url_aes.'/'.$upload_data,$upload_data);          
        }
    ?>
</div>
</body>
</html>