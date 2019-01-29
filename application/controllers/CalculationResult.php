<?php

class CalculationResult extends CI_Controller{
    public function __construct()
    {
		parent::__construct();	
	}
    
    
    public function MarriageRelief($relief)
    {
        $TaxRelief = 0;
        if ($relief == "TK0")
        {
            $TaxRelief = 54000000;
        } 
        else if ($relief == "K0")
        {
            $TaxRelief = 58500000;
        } 
        else if ($relief == "K1")
        {
            $TaxRelief = 63000000;
        } 
        else if ($relief == "K2")
        {
            $TaxRelief = 67500000;
        } 
        else if ($relief == "K3")
        {
            $TaxRelief = 72000000;
        }
        return $TaxRelief;
    }

    public function TaxRate($AnnualIncome)
    {
        if ($AnnualIncome <= 50000000)
        {
            $TaxRate = 0.05;
            $TaxOnThisIncome = $AnnualIncome * 0.05;
        } 
        else if ($AnnualIncome > 50000000 && $AnnualIncome <= 250000000)
        {
            $TaxRate = 0.15;
            $TaxOnThisIncome = (0.05 * 50000000) + (($AnnualIncome - 50000000)*0.15);
        }
        else if ($AnnualIncome > 250000000 && $AnnualIncome <= 500000000)
        {
            $TaxRate = 0.25;
            $TaxOnThisIncome = (0.05 * 50000000) + (250000000*0.15) + (($AnnualIncome - 250000000)*0.25);
        }
        else if ($AnnualIncome > 500000000 )
        {
            $TaxRate = 0.30;
            $TaxOnThisIncome = (0.05 * 50000000) + (250000000*0.15) + (500000000*0.25) + (($AnnualIncome - 500000000)*0.30);
        }
        return [$TaxRate,$TaxOnThisIncome];
    }

    
    public function AnnualTaxIncome($Salary, $Relief="")
    {
        if(!empty($Relief))
        {
            $AnnualTaxableIncome = $Salary * 12 - $this->MarriageRelief($Relief) ;
            $TaxOnThisIncome = $this->TaxRate($AnnualTaxableIncome)[1]; 
        }else{
            $AnnualTaxableIncome = $Salary * 12;
            $TaxOnThisIncome=0;
            for ($i=1; $i<=12; $i++)
            {
                if($i==1){
                     $AnnualTaxableIncome =  $AnnualTaxableIncome -  0;
                }else{
                    $AnnualTaxableIncome =  $AnnualTaxableIncome -  $Salary;
                }
                    $TaxOnThisIncome = $TaxOnThisIncome + ($this->TaxRate($AnnualTaxableIncome)[0]*$Salary); 
            }
        }
        return $TaxOnThisIncome;
    }


    public function index()
    {
        //Without Tax Relief
        $Case1 = $this->AnnualTaxIncome($this->input->post("field_6"));
        //With Tax Relief
        $Case2 = $this->AnnualTaxIncome($this->input->post("field_6"),$this->input->post("field_7"));
        
        $data["TaxResult"] = array($Case1,$Case2);
		$this->load->view("ResultView", $data);
    }
}