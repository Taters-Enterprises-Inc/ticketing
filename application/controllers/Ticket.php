<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ticket_model', 'ticket');
		/*$this->load->model('User_model', 'user');
		$this->load->model('Survey_questions_model', 'survey_question');*/
	}

	public function dashboard()
	{
		$openTickets = $this->ticket->getOpenTickets();
		$data['open_tickets'] = $openTickets;

		$this->load->view('admin/ticket/includes/opening_tag');
		$this->load->view('admin/ticket/includes/header');
		$this->load->view('admin/ticket/includes/sidebar');
		$this->load->view('admin/ticket/dashboard', $data);
		$this->load->view('admin/ticket/includes/closing_tag');
	}

	public function create()
	{
		$this->load->view('admin/ticket/includes/opening_tag');
		$this->load->view('admin/ticket/includes/header');
		$this->load->view('admin/ticket/includes/sidebar');
		$this->load->view('admin/ticket/create_ticket');
		$this->load->view('admin/ticket/includes/closing_tag');
	}

	public function store()
	{
		$department_id = $this->input->post('department_id');

		$ticket_data = array(
			'department_id' => $department_id,
			'status' => 1,
		);

		$ticket_id = $this->ticket->insertTicket($ticket_data);

		$ticket_title = $this->input->post('ticket_title');
		$ticket_details = $this->input->post('ticket_details');
		
		$ticket_information = array(
			'ticket_id' => $ticket_id,
			'ticket_title' => $ticket_title,
			'ticket_details' => $ticket_details,
		);

		$this->ticket->insertTicketInformation($ticket_information);
	}

	public function triage()
	{
		$ticket_id = $this->input->post('ticket_id');
		$department_id = $this->input->post('department_id');
		
		$ticket_information = array(
			'department_id' => $department_id,
		);

		$this->ticket->triageTicket($ticket_id, $ticket_information);
	}

	public function dashboard1()
	{
		$openTickets = $this->ticket->getOpenTickets();
		$resolvedTickets = $this->ticket->getResolvedTickets();
		$closedTickets = $this->ticket->getClosedTickets();

		$data['open_tickets'] = $openTickets;
		$data['resolved_tickets'] = $resolvedTickets;
		$data['closed_tickets'] = $closedTickets;

		$this->load->view('includes/opening_tag');
		$this->load->view('includes/navbar');
		$this->load->view('dashboard', $data);
		//$this->load->view('includes/footer');
		$this->load->view('includes/closing_tag');
	}

	public function your_tickets()
	{
		$department_id = $this->session->userdata('department_id');
		$countOfYourOpenTickets = $this->ticket->getCountOfYourOpenTickets($department_id);
		$countOfYourResolvedTickets = $this->ticket->getCountOfYourResolvedTickets($department_id);
		$countOfYourClosedTickets = $this->ticket->getCountOfYourClosedTickets($department_id);

		$yourOpenTickets = $this->ticket->getYourOpenTickets($department_id);
		$yourResolvedTickets = $this->ticket->getYourResolvedTickets($department_id);
		$yourClosedTickets = $this->ticket->getYourClosedTickets($department_id);
		
		$data['your_open_tickets'] = $yourOpenTickets;
		$data['your_resolved_tickets'] = $yourResolvedTickets;
		$data['your_closed_tickets'] = $yourClosedTickets;
		
		$data['count_of_your_open_tickets'] = $countOfYourOpenTickets;
		$data['count_of_your_resolved_tickets'] = $countOfYourResolvedTickets;
		$data['count_of_your_closed_tickets'] = $countOfYourClosedTickets;

		$this->load->view('admin/ticket/includes/opening_tag');
		$this->load->view('admin/ticket/includes/header');
		$this->load->view('admin/ticket/includes/sidebar');
		$this->load->view('admin/ticket/your_tickets', $data);
		$this->load->view('admin/ticket/includes/closing_tag');
	}

	public function resolved_ticket($ticket_id)
	{
		$resolvedTicket = $this->ticket->getResolvedTicketById($ticket_id);
		$getAllCommentsByTicketId = $this->ticket->getAllCommentsByTicketId($ticket_id);

		$data['ticket_comments'] = $getAllCommentsByTicketId;
		$data['resolved_ticket_ticket_id'] = $resolvedTicket->ticket_id;
		$data['resolved_ticket_title'] = $resolvedTicket->ticket_title;
		$data['resolved_ticket_details'] = $resolvedTicket->ticket_details;

		$this->load->view('admin/ticket/includes/opening_tag');
		$this->load->view('admin/ticket/includes/header');
		$this->load->view('admin/ticket/includes/sidebar');
		$this->load->view('admin/ticket/resolved_ticket', $data);
		$this->load->view('admin/ticket/includes/closing_tag');
	}

	public function tag_ticket_as_resolved()
	{
		$ticket_id = $this->input->post('ticket_id');
		
		$ticket_information = array(
			'status' => 2,
		);

		$this->ticket->tagTicketAsResolved($ticket_id, $ticket_information);
	}

	public function closed_ticket($ticket_id)
	{
		$closedTicket = $this->ticket->getClosedTicketById($ticket_id);
		$getAllCommentsByTicketId = $this->ticket->getAllCommentsByTicketId($ticket_id);

		$data['ticket_comments'] = $getAllCommentsByTicketId;
		$data['closed_ticket_ticket_id'] = $closedTicket->ticket_id;
		$data['closed_ticket_title'] = $closedTicket->ticket_title;
		$data['closed_ticket_details'] = $closedTicket->ticket_details;

		$this->load->view('admin/ticket/includes/opening_tag');
		$this->load->view('admin/ticket/includes/header');
		$this->load->view('admin/ticket/includes/sidebar');
		$this->load->view('admin/ticket/closed_ticket', $data);
		$this->load->view('admin/ticket/includes/closing_tag');
	}

	public function tag_ticket_as_closed()
	{
		$ticket_id = $this->input->post('ticket_id');
		
		$ticket_information = array(
			'status' => 3,
		);

		$this->ticket->tagTicketAsClosed($ticket_id, $ticket_information);
	}

	public function submit_comment()
	{
		$ticket_id = $this->input->post('ticket_id');
		$commentDetails = $this->input->post('comment_details');
		$commenterUserId = $this->session->userdata('user_id');
		$commenterFullName = $this->session->userdata('full_name');

		$ticket_comment_data = array(
			'ticket_id' => $ticket_id,
			'comment_details' => $commentDetails,
			'commenter_user_id' => $commenterUserId,
			'commenter_fullname' => $commenterFullName,
		);

		$this->ticket->insertComment($ticket_comment_data);
	}

	public function open_ticket($ticket_id)
	{
		$openTicket = $this->ticket->getOpenTicketById($ticket_id);
		$getAllCommentsByTicketId = $this->ticket->getAllCommentsByTicketId($ticket_id);
		$getTicketStatusById = $this->ticket->getTicketStatusById($ticket_id);

		$ticketStatus = $getTicketStatusById->status;

		switch ($ticketStatus) {
			case 1:
				$ticket_status = 'OPEN';
				break;

			case 2:
				$ticket_status = 'RESOLVED';
				break;

			case 3:
				$ticket_status = 'CLOSED';
				break;
			
			default:
				$ticket_status = 'N/A';
				break;
		}

		$data['ticket_comments'] = $getAllCommentsByTicketId;
		$data['open_ticket_ticket_id'] = $openTicket->ticket_id;
		$data['open_ticket_title'] = $openTicket->ticket_title;
		$data['open_ticket_details'] = $openTicket->ticket_details;
		$data['ticket_status'] = $ticket_status;

		$this->load->view('admin/ticket/includes/opening_tag');
		$this->load->view('admin/ticket/includes/header');
		$this->load->view('admin/ticket/includes/sidebar');
		$this->load->view('admin/ticket/open_ticket', $data);
		$this->load->view('admin/ticket/includes/closing_tag');
	}
}