<tr class="form-field">
	<th scope="row" valign="top"><label><?php _e('Sorting ID', 'ut_portfolio_lang') ?></label></th>
	<td>
		<input type="text" name="SortID" value="<?php if (isset($term->SortID)) echo $term->SortID; ?>"><br />
		<span class="description"><?php _e('Sorting ID, please use only integers to arrange in ascending order', 'ut_portfolio_lang') ?></span>
	</td>
</tr>