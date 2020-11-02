<?php
namespace App\Controller;

use App\Entity\Invoice;
use App\Entity\InvoiceLines;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class InvoiceController extends Controller {

    public function save_invoice()
    {   
        #save first table values
        $invoice = new Invoice();
        $entityMan = $this->getDoctrine()->getManager();
        if(isset($_POST['submit1']))
        {
            $session=2;
            $date=$_POST['date'];
            $number=$_POST['number_invoice'];
            $id_client=$_POST['id_client'];
            $date_format = date_create($date);
            $invoice->setDate($date_format);
            $invoice->setInvoiceNumber($number);
            $invoice->setIdClient($id_client);
            $entityMan->persist($invoice);
            $entityMan->flush();
            $id=$invoice->getId();
            return $this->render('page.html.twig',['id'=> $id ,
            'session'=>$session]);
        }
        #save second table values
        else if(isset($_POST['submit2']))
        {
            $id=$invoice->getId();
            $invoice_lines = new InvoiceLines();
            $idInvoice=$_POST['id_invoice'];
            $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($idInvoice);
            if (!$invoice) {
             new Response('sorry the invoice you are referring to is not present in the database');
            }
            $description = $_POST['description'];
            $quantity = $_POST['quantity'];
            $amount = $_POST['amount'];
            $iva = $_POST['iva'];
            $total_amount = $_POST['total_amount'];
            $invoice_lines->setIdInvoice($invoice);
            $invoice_lines->setDescription($description);
            $invoice_lines->setIdInvoice($idInvoice);
            $invoice_lines->setQuantity($quantity);
            $invoice_lines->setAmount($amount);
            $invoice_lines->setIva($iva);
            $invoice_lines->setTotalAmount($total_amount);
            $entityMan->persist($invoice_lines);
            $entityMan->flush();
            $session=3;
            return  $this->render('page.html.twig',['id'=>  $id ,
            'session'=>$session]);
        }
        #return to registrate other invoice
        else if(isset($_POST['return_button']))
        {
            return new Response($this->redirectToRoute('app_invoice_register'));
        }
        #if the page was called without post method 
        else
        {
            $session=4;
            return new Response($this->redirectToRoute('app_invoice_register', ['session'=>$session]));
        }
        
    }
}
?>
