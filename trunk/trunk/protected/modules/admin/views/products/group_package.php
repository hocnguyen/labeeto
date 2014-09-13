<?php
if(isset($model->groups)){
    foreach($model->groups as $item){
        if(isset($item->group_name)) { ?>
            <div class="row-form  clearfix group_<?php echo $item->id ?>">

                <div class="isb-right_circle point_group"></div>
                <div class="span4">
                    <input type="text" class="name_group_<?php echo $item->id ?> validate[required]" name="Groups[<?php echo $item->id?>][nameGroup]" value="<?php echo $item->group_name ?>">
                </div>
                <div class="span5">
                    <textarea class="des_group des_group_1" name="Groups[<?php echo $item->id?>][desGroup]"> <?php echo $item->description ?></textarea>
                </div>
                <div class="span2">
                    <div class="btn btn-warning  delete-group" onclick="deleteGroup('<?php echo $item->id ?>')" >
                        <span class="isw-delete "></span>
                    </div>
                    <div class="btn btn-primary " onclick="addPackage(<?php echo $item->id ?>)">
                        <span class="isw-plus"></span>
                    </div>
                </div>
                <?php if(isset($item->productPackages) && count($item->productPackages) >0) { ?>
                    <div class="span12 package_group_<?php echo $item->id ?> " style="margin-left: 0">
                        <div class="head clearfix close_package" onclick="closePackage(this)">
                            <h1><span class="isw-donw_circle "></span><?php echo Yii::t('global','Package')?>   </h1>
                        </div>
                        <div class="block-fluid package_<?php echo $item->id ?>">
                            <div class="row-form clearfix title-package">
                                <div class="span2">Quantity  </div>
                                <div class="span2">Quantity Type  </div>
                                <div class="span2">Price  </div>
                                <div class="span2">Offers  </div>
                                <div class="span3">Shipping Type  </div>
                                <div class="span1"></div>
                            </div>
                            <?php foreach($item->productPackages as $key=> $package){
                            if(isset($package->group_id)){
                            ?>
                                <div class="row-form clearfix  packageDetail_<?php echo $package->id ?>">
                                    <div class="span2">
                                        <input type="text" onkeypress="onlyNumber(event)" class="validate[required] " value="<?php echo $package->quantity ?>" name="Groups[<?php echo $item->id ?>][Package][<?php echo $package->id ?>][quantity]" />
                                    </div>
                                    <div class="span2">
                                        <input type="text" class="validate[required]" value="<?php echo $package->quantity_type ?>" name="Groups[<?php echo $item->id ?>][Package][<?php echo $package->id ?>][quantity_type]" />
                                    </div>
                                    <div class="span2">
                                        <input type="text" onkeypress="onlyNumber(event)" value="<?php echo $package->price ?>" class="validate[required]" name="Groups[<?php echo $item->id ?>][Package][<?php echo $package->id ?>][price]" />
                                    </div>
                                    <div class="span2">
                                        <input type="text" onkeypress="onlyNumber(event)"  value="<?php echo $package->offers ?>" name="Groups[<?php echo $item->id ?>][Package][<?php echo $package->id ?>][offers]" />
                                    </div>
                                    <div class="span3">
                                        <input type="text"  value="<?php echo $package->shipping_type ?>" name="Groups[<?php echo $item->id ?>][Package][<?php echo $package->id ?>][shipping_type]" />
                                    </div>
                                    <div class="span1">
                                        <div class="btn btn-warning tipb delete-group" onclick="deletePackage('<?php echo $package->id ?>')">
                                            <span class="isw-delete "></span>
                                        </div>
                                    </div>
                                </div>

                            <?php    }
                            }?>
                        </div>
                    </div>

                <?php } ?>
           </div>
        <?php       }
    }
}

?>

