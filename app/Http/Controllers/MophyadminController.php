<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MophyadminController extends Controller
{
	
	    // Dashboard
    public function dashboard_1()
    {
      
     
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = __FUNCTION__;
	//dd($action);	
        return view('templatec.dashboard.index', compact('page_title', 'page_description','action','logo','logoText','active','event_class','button_class'));
    }
    // My Wallet
    public function my_wallet()
    {
        
        $page_title = 'My Wallet';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('templatec.dashboard.my_wallet', compact('page_title', 'page_description','action','logo','logoText'));
    }
	
	     // Invoices
    public function invoices()
    {
        $page_title = 'Invoices';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('templatec.dashboard.invoices', compact('page_title', 'page_description','action','logo','logoText'));
    }
	    // Cards Center
    public function cards_center()
    {
        $page_title = 'Cards Center';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('templatec.dashboard.cards_center', compact('page_title', 'page_description','action','logo','logoText'));
    }
	    // Transactions
    public function transactions()
    {
        $page_title = 'Transactions';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('templatec.dashboard.transactions', compact('page_title', 'page_description','action','logo','logoText'));
    }
	    // Transactions Details
    public function transactions_details()
    {
        $page_title = 'Transactions Details';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
		
        $action = __FUNCTION__;

        return view('templatec.dashboard.transactions_details', compact('page_title', 'page_description','action','logo','logoText'));
    }
	    // Calender
    public function app_calender()
    {
        $page_title = 'Calender';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.app.calender', compact('page_title', 'page_description','action'));
    }
    
	    // Profile
    public function app_profile()
    {
        $page_title = 'Profile';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('templatec.app.profile', compact('page_title', 'page_description','action'));
    }
	    // Post Details
    public function post_details()
    {
        $page_title = 'Post Details';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('templatec.app.post_details', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Chartist
    public function chart_chartist()
    {
        $page_title = 'Chart Chartist';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;

        return view('templatec.chart.chartist', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Chartjs
    public function chart_chartjs()
    {
        $page_title = 'Chart Chartjs';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.chart.chartjs', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Flot
    public function chart_flot()
    {
        $page_title = 'Chart Flot';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.chart.flot', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Morris
    public function chart_morris()
    {
        $page_title = 'Chart Morris';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.chart.morris', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Peity
    public function chart_peity()
    {
        $page_title = 'Chart Peity';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('templatec.chart.peity', compact('page_title', 'page_description','action'));
    }
	
	    // Chart Sparkline
    public function chart_sparkline()
    {
        $page_title = 'Chart Sparkline';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('templatec.chart.sparkline', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Checkout
    public function ecom_checkout()
    {
        $page_title = 'Checkout';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('templatec.ecom.checkout', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Customers
    public function ecom_customers()
    {
        $page_title = 'Ecom Customers';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ecom.customers', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Invoice
    public function ecom_invoice()
    {
        $page_title = 'Invoice';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ecom.invoice', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Product Detail
    public function ecom_product_detail()
    {
        $page_title = 'Product Detail';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ecom.productdetail', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Product Grid
    public function ecom_product_grid()
    {
        $page_title = 'Product Grid';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ecom.productgrid', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Product List
    public function ecom_product_list()
    {
        $page_title = 'Product List';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ecom.productlist', compact('page_title', 'page_description','action'));
    }
	
	    // Ecommerce Product Order
    public function ecom_product_order()
    {
        $page_title = 'Product Order';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ecom.productorder', compact('page_title', 'page_description','action'));
    }
	
	    // Email Compose
    public function email_compose()
    {
        $page_title = 'Compose';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.message.compose', compact('page_title', 'page_description','action'));
    }
	
	    // Email Inbox
    public function email_inbox()
    {
        $page_title = 'Inbox';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.message.inbox', compact('page_title', 'page_description','action'));
    }
	
	    // Email Read
    public function email_read()
    {
        $page_title = 'Read';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.message.read', compact('page_title', 'page_description','action'));
    }
	
	    // Form Editor Summernote
    public function form_editor_summernote()
    {
        $page_title = 'Summernote Editor';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('templatec.form.editorsummernote', compact('page_title', 'page_description','action'));
	}
	
	    // Form Element
    public function form_element()
    {
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.form.element', compact('page_title', 'page_description','action'));
    }
	
	    // Form Pickers
    public function form_pickers()
    {
        $page_title = 'Form Pickers';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.form.pickers', compact('page_title', 'page_description','action'));
    }
	
	    // Form Validation Jquery
    public function form_validation_jquery()
    {
        $page_title = 'Form Validation';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.form.validationjquery', compact('page_title', 'page_description','action'));
    }
	
	    // Form Wizard
    public function form_wizard()
    {
        $page_title = 'Form Wizard';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.form.wizard', compact('page_title', 'page_description','action'));
    }
    
    	
	    // Map Jqvmap
    public function map_jqvmap()
    {
        $page_title = 'Map Jqvmap';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('templatec.map.jqvmap', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 400
    public function page_error_400()
    {
        $page_title = 'Page Error 400';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.page.error400', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 403
    public function page_error_403()
    {
        $page_title = 'Page Error 403';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('templatec.page.error403', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 404
    public function page_error_404()
    {
        $page_title = 'Page Error 404';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('templatec.page.error404', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 500
    public function page_error_500()
    {
        $page_title = 'Page Error 500';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.page.error500', compact('page_title', 'page_description','action'));
    }
	
	    // Page Error 503
    public function page_error_503()
    {
        $page_title = 'Page Error 503';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.page.error503', compact('page_title', 'page_description','action'));
    }
	
	    // Page Forgot Password
    public function page_forgot_password()
    {
        $page_title = 'Page Forgot Password';
        $page_description = 'Some description for the page';
        
        $action = __FUNCTION__;

        return view('templatec.page.forgot_password', compact('page_title', 'page_description','action'));
    }
	
	    // Page Lock Screen
    public function page_lock_screen()
    {
        $page_title = 'Page Lock Screen';
        $page_description = 'Some description for the page';
		
        $action = __FUNCTION__;

        return view('templatec.page.lockscreen', compact('page_title', 'page_description','action'));
    }
	
	    // Page Login
    public function page_login()
    {
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.page.login', compact('page_title', 'page_description','action'));
    }
	
	    // Page Register
    public function page_register()
    {
        $page_title = 'Page Register';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.page.register', compact('page_title', 'page_description','action'));
    }
	
	    // Table Bootstrap Basic
    public function table_bootstrap_basic()
    {
        $page_title = 'Table Basic';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('templatec.table.bootstrapbasic', compact('page_title', 'page_description','action'));
    }
	
	    // Table Datatable Basic
    public function table_datatable_basic()
    {
        $page_title = 'Table Datatable';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.table.datatablebasic', compact('page_title', 'page_description','action'));
    }
	    // UC Nestable.
    public function uc_nestable()
    {
        $page_title = 'Nestable';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.uc.nestable', compact('page_title', 'page_description','action'));
    }
	    // UC Lightgallery.
    public function uc_lightgallery()
    {
        $page_title = 'Lightgallery';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.uc.lightgallery', compact('page_title', 'page_description','action'));
    }
	
	    // UC NoUi Slider
    public function uc_noui_slider()
    {
        $page_title = 'Noui Slider';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.uc.nouislider', compact('page_title', 'page_description','action'));
    }
	
	    // UC Select2
    public function uc_select2()
    {
        $page_title = 'Select2';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.uc.select2', compact('page_title', 'page_description','action'));
    }
	
	    // UC Sweetalert
    public function uc_sweetalert()
    {
        $page_title = 'Sweetalert';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.uc.sweetalert', compact('page_title', 'page_description','action'));
    }
	
	    // UC Toastr
    public function uc_toastr()
    {
        $page_title = 'Toastr';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.uc.toastr', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Accordion
    public function ui_accordion()
    {
        $page_title = 'Accordion';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.accordion', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Alert
    public function ui_alert()
    {
        $page_title = 'Alert';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.alert', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Badge
    public function ui_badge()
    {
        $page_title = 'Badge';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.badge', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Button
    public function ui_button()
    {
        $page_title = 'Button';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.button', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Button Group
    public function ui_button_group()
    {
        $page_title = 'Button Group';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.buttongroup', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Card
    public function ui_card()
    {
        $page_title = 'Card';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.card', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Carousel
    public function ui_carousel()
    {
        $page_title = 'Carousel';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.carousel', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Dropdown
    public function ui_dropdown()
    {
        $page_title = 'Dropdown';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.dropdown', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Grid
    public function ui_grid()
    {
        $page_title = 'Grid';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.grid', compact('page_title', 'page_description','action'));
    }
	
	    // Ui List Group
    public function ui_list_group()
    {
        $page_title = 'List Group';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.listgroup', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Media Object
    public function ui_media_object()
    {
        $page_title = 'Media Object';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.mediaobject', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Modal
    public function ui_modal()
    {
        $page_title = 'Modal';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.modal', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Pagination
    public function ui_pagination()
    {
        $page_title = 'Pagination';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.pagination', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Popover
    public function ui_popover()
    {
        $page_title = 'Popover';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.popover', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Progressbar
    public function ui_progressbar()
    {
        $page_title = 'Progressbar';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.progressbar', compact('page_title', 'page_description','action'));
    }
	
	    // Ui Tab
    public function ui_tab()
    {
        $page_title = 'Tab';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.tab', compact('page_title', 'page_description','action'));
    }
	

	    // Ui Typography
    public function ui_typography()
    {
        $page_title = 'Typography';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.ui.typography', compact('page_title', 'page_description','action'));
    }
	
	    // Widget Basic
    public function widget_basic()
    {
        $page_title = 'Widget';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('templatec.widget.widget_basic', compact('page_title', 'page_description','action'));
    }
}
