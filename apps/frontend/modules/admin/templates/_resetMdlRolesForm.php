<form action="<?php echo ('resetMdlRoles')?>" method="POST">
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <input type="submit" class="button" value="Submit" onclick="return confirmPost('Are you sure you want to RESET MOODLE ROLES TO TEMPLATE VALUES?')" />
        </td>
      </tr>
    </tfoot>
    <tbody>
    	<tr>
            <td>
                <b>eSchool(s):</b>
                <select id="eschool" name="eschool">
                    <option value="1">All eSchools</option>
                    <?php
                    foreach($eschoolList as $eschool)
                    {
                        print '<option value="' . $eschool->getShortName() . '">' . $eschool->getFullName() . ' (' . $eschool->getShortName() . ')</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
    </tbody>
  </table>
</form>