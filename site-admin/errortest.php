<div class="box-content">
                                        <div class="field">
                                            
                                            <label>Company Logo </label>
                                          <select name="ImageFile">
												<option value="">- Select Image -</option>
												<?php
												$dirPath = dir('../files/company-logo/');
												while (($file = $dirPath->read()) !== false)
												{
												   echo "<option value=\"company-logo/" . trim($file) . "\">" . $file . "</option>\n";
												}
												$dirPath->close();
												?>
												</select>
                                        </div>