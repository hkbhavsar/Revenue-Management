<?php
class Model_LeadRevenueReport extends ORM{
  protected $_table_name  = 'tbl_lead_revenue_report'; 
  protected $_primary_key = 'lead_revenue_id';
  protected $_sorting = array('lead_revenue_id' => 'ASC');
  public $errors = '';
}
?>