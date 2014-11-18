
<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
    <?php echo CHtml::encode($data->Title); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
    <?php echo CHtml::encode($data->Description); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('IsActive')); ?>:</b>
    <?php echo CHtml::encode($data->IsActive); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('DateAdded')); ?>:</b>
    <?php echo CHtml::encode($data->DateAdded); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('DateUpdated')); ?>:</b>
    <?php echo CHtml::encode($data->DateUpdated); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('UserId')); ?>:</b>
    <?php echo CHtml::encode($data->UserId); ?>
    <br />


</div>