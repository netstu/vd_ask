<div id="ask">
    <?php echo Phalcon\Tag::form(array('index/ask', 'method' => 'post')); ?>
	<table>
		<tr>
			<td>问题</td>
			<td>
			    <textarea name="title" id="" cols="30" rows="3"></textarea>
			</td>
		</tr>
		<tr>
			<td>补充问题</td>
			<td>
			    <textarea name="question" id="" cols="30" rows="5"></textarea>
			</td>
		</tr>
		<tr>
			<td>分类</td>
			<td><?php echo Phalcon\Tag::select(array('catid', $cats, 'using' => array('catid', 'catname'))); ?></td>
		</tr>
		<tr>
			<td><input type="submit" value="submit" /></td>
			<td></td>
		</tr>
	</table>
	<?php echo Phalcon\Tag::submitButton(array('Send')); ?>
</form>
</div>