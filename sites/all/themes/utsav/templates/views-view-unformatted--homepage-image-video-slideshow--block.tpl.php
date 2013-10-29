<div class="camera_wrap camera_emboss" id="homepage_image_video_slider">
<?php foreach ($rows as $id => $row):	?>
	<?php 	
		$node_type		= $view->result[$id]->node_type;
		$title			= $view->result[$id]->node_title;	
		
		if($node_type == "article"){		

			$main_img_uri 	= $view->result[$id]->field_field_image[0]['rendered']['#item']['uri']; 
			$main_img_style = $view->result[$id]->field_field_image[0]['rendered']['#image_style'];
			$main_img_url 	= image_style_url($main_img_style, $main_img_uri);
			
			$thumbnail_uri 	= $view->result[$id]->field_field_image_1[0]['rendered']['#item']['uri']; 
			$thumbnail_style = $view->result[$id]->field_field_image_1[0]['rendered']['#image_style'];
			$thumbnail_url 	= image_style_url($thumbnail_style, $thumbnail_uri);
			
		}else if($node_type == "video"){		
			$video_url			= $view->result[$id]->field_field_video_embed[0]['rendered'][0]['#video_url'];			
			
			$main_img_uri 		= $view->result[$id]->field_field_video_embed[0]['rendered'][0]['#image_url']; 
			$main_img_style 	= $view->result[$id]->field_field_video_embed[0]['rendered'][0]['#image_style'];
			$main_img_url 		= image_style_url($main_img_style, $main_img_uri);
			
			$thumbnail_uri 		= $view->result[$id]->field_field_video_embed_1[0]['rendered'][0]['#path'];
			$thumbnail_style 	= $view->result[$id]->field_field_video_embed_1[0]['rendered'][0]['#style_name'];
			$thumbnail_url 		= image_style_url($thumbnail_style, $thumbnail_uri);
			
		}
		
		
	?>
	<div data-thumb="<?php echo $thumbnail_url; ?>" data-src="<?php echo $main_img_url; ?>" data-time="1500" data-trasPeriod="4000" data-link="http://www.google.com/" data-target="_blank">
			<?php if($node_type == "article"){	 ?>
				<div class="camera_caption fadeFromBottom"><?php echo $title; ?></div>
			<?php }else if($node_type == "video" && isset($video_url)){	 ?>
				<iframe src="<?php echo $video_url;  ?>" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			<?php } ?>
     </div>
	 
<?php endforeach; ?>
</div><!-- #homepage_image_video_slider -->