                <div class="column2">
					<img src="images/title6.gif" alt="" width="133" height="18" /><br />
					
					<div class="news">
						<span>Welcome to the world of tourism</span><br />
						<img src="images/pic5.jpg" alt="" width="183" height="97" />
						<p>Welcome to our website. Although this site was made as a database project by Ashish Prasad, Apurv Verma and Priyanshu Raj and the project intended mainly to focus on the database and query part and not on the interface but still we have made the interface nicely such that in future this can be extended into a fully functional tourist site.</p>
						<a href="#" class="more">more info</a>
					</div>
                                        <div class="news">
                                            <?php
                                                 if(isset($_SESSION['login_id']))
                                                 {
                                                    echo "Enter your comments";
						    $sel_query="SELECT * FROM city";
						    $sel_query_set=mysql_query($sel_query,$connection);
													 

                                                    echo "<form action = \"insert_comment.php\" method=POST>";
                                                        echo"CITY<br/>";
                                                        echo"<select value=\"\" name=\"city\" >";
														
						while($sel_item=mysql_fetch_array($sel_query_set))
						{
						    $r=$sel_item['name'];
						    echo "<option>$r</option>";
                                                }
														
											
						 echo"</select>
                                                        <br/><br/>
                                                        Time of Visit<br/>
														
                                                        <select value=\"\" name=\"time_of_visit\" >
										
							<option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option></select>
                                                        <br/><br/>
                                                        EXPECTED EXPENDITURE<br/>
                                                        <input type=\"text\"  value=\"\" name=\"expected_expenditure\" >
                                                        <br/><br/>
                                                        RATING<br/>
                                                        <select  value=\"\" name=\"rating\" >";

                                                    for($k=1;$k<11;$k++){
                                                    echo"<option/>$k";
                                                    }
                                                    echo"</select>
                                                        <br/><br/>
                                                        COMMENTS
                                                        <br/>
                                                        <input type=\"text\"  value=\"\" name=\"comments\" >
                                                        <br/><br/>
                                                        SUGGESTIONS<br/>
                                                        <input type=\"text\" value=\"\" name=\"suggestions\" >
                                                        <br/><br/>
                                                        <input type=\"submit\" value=\"Enter\">
                                                    </form>";


                                                }
                                            ?>

					</div>
				</div>
