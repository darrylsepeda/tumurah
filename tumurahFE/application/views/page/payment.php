
<div id="wrapper">
	<div id="accordion">
          <h3><div id="pmtcfm">Shipping Information</div></h3>
          <div>
            <p>
            	<form id="shipInfo">
                	<table>
                    	<tr>
                            <td style="vertical-align:top;">Address</td>
                            <td><textarea rows="5"></textarea></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td>
                            	<select>
                                	<?php
									foreach($kota->result() as $city){
									?>
                                    	<option id="<?=$city->city_id;?>"><?=$city->name;?></option>
                                    <?php
									}
									?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>
                            	<select>
                                	<?php
									foreach($kota->result() as $city){
									?>
                                    	<option id="<?=$city->city_id;?>"><?=$city->name;?></option>
                                    <?php
									}
									?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Postcode</td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td><input type="text" /></td>
                        </tr>
                    </table>
                    <input type="submit" value="Next Step" />
                </form>
            </p>
          </div>
          <h3><div id="dlydtl">Shipping Method</div></h3>
          <div>
            <p></p>
          </div>
          <h3>Order Review</h3>
          <div>
            <p></p>
            <ul>
              <li>List item one</li>
              <li>List item two</li>
              <li>List item three</li>
            </ul>
          </div>
          <h3>Cart</h3>
          <div>
            <p></p>
          </div>
          <h3>Payment Method</h3>
          <div>
            <p></p>
          </div>
        </div>
</div>
	