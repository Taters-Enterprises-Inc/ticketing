<?php
class Ticket_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
	}

	public function insertTicket($ticket_data)
	{
		$this->db->insert('tickets', $ticket_data);
		$ticket_id = $this->db->insert_id();

		return $ticket_id;
	}

	public function insertTicketInformation($ticket_information)
	{
		$this->db->trans_start();
		$this->db->insert('ticket_information', $ticket_information);
		$this->db->trans_complete();
	}

	public function getOpenTickets()
	{
		$this->db->select('T.id, TI.ticket_title');
		$this->db->from('tickets T');
		$this->db->join('ticket_information TI', 'TI.ticket_id = T.id', 'left');
		//$this->db->where('T.status', 1);
		//$this->db->where('T.department_id IS NULL', null, false);

		$query = $this->db->get();
		return $query->result_array();
	}

	/*public function getOpenTickets()
	{
		$this->db->select('T.id, TI.ticket_details, T.status');
		$this->db->from('tickets T');
		$this->db->join('ticket_information TI', 'TI.ticket_id = T.id', 'left');
		$this->db->where('T.status', 1);

		$query = $this->db->get();
		return $query->result_array();
	}*/

	public function getResolvedTickets()
	{
		$this->db->select('T.id, TI.ticket_details, T.status');
		$this->db->from('tickets T');
		$this->db->join('ticket_information TI', 'TI.ticket_id = T.id', 'left');
		$this->db->where('T.status', 2);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function getClosedTickets()
	{
		$this->db->select('T.id, TI.ticket_details, T.status');
		$this->db->from('tickets T');
		$this->db->join('ticket_information TI', 'TI.ticket_id = T.id', 'left');
		$this->db->where('T.status', 3);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function triageTicket($ticket_id, $data)
	{
		$this->db->where('id', $ticket_id);
        $this->db->update('tickets', $data);
	}

	public function getCountOfYourOpenTickets($department_id)
	{
		$this->db->select('*');
		$this->db->from('tickets');
		$this->db->where('status', 1);
		$this->db->where('department_id', $department_id);

		$query = $this->db->get();
		return "(" . $query->num_rows() . ")";
	}

	public function getCountOfYourResolvedTickets($department_id)
	{
		$this->db->select('*');
		$this->db->from('tickets');
		$this->db->where('status', 2);
		$this->db->where('department_id', $department_id);

		$query = $this->db->get();
		return "(" . $query->num_rows() . ")";
	}

	public function getCountOfYourClosedTickets($department_id)
	{
		$this->db->select('*');
		$this->db->from('tickets');
		$this->db->where('status', 3);
		$this->db->where('department_id', $department_id);

		$query = $this->db->get();
		return "(" . $query->num_rows() . ")";
	}

	public function getYourOpenTickets($department_id)
	{
		$this->db->select('T.id, TI.ticket_title');
		$this->db->from('tickets T');
		$this->db->join('ticket_information TI', 'TI.ticket_id = T.id', 'left');
		$this->db->where('T.status', 1);
		$this->db->where('T.department_id', $department_id);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function getResolvedTicketById($ticket_id)
	{
		$this->db->select('*');
        $this->db->from('ticket_information');
        $this->db->where('ticket_id', $ticket_id);

        $query = $this->db->get();
        return $query->row();
	}

	public function tagTicketAsResolved($ticket_id, $data)
	{
		$this->db->where('id', $ticket_id);
        $this->db->update('tickets', $data);
	}

	public function getYourResolvedTickets($department_id)
	{
		$this->db->select('T.id, TI.ticket_title');
		$this->db->from('tickets T');
		$this->db->join('ticket_information TI', 'TI.ticket_id = T.id', 'left');
		$this->db->where('T.status', 2);
		$this->db->where('T.department_id', $department_id);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function getClosedTicketById($ticket_id)
	{
		$this->db->select('*');
        $this->db->from('ticket_information');
        $this->db->where('ticket_id', $ticket_id);

        $query = $this->db->get();
        return $query->row();
	}

	public function tagTicketAsClosed($ticket_id, $data)
	{
		$this->db->where('id', $ticket_id);
        $this->db->update('tickets', $data);
	}

	public function getYourClosedTickets($department_id)
	{
		$this->db->select('T.id, TI.ticket_title, TI.ticket_details');
		$this->db->from('tickets T');
		$this->db->join('ticket_information TI', 'TI.ticket_id = T.id', 'left');
		$this->db->where('T.status', 3);
		$this->db->where('T.department_id', $department_id);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function getAllCommentsByTicketId($ticket_id)
	{
		$this->db->select('*');
		$this->db->from('ticket_comments');
		$this->db->where('ticket_id', $ticket_id);
		$this->db->order_by('id DESC');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function insertComment($ticket_data)
	{
		$this->db->insert('ticket_comments', $ticket_data);
	}

	public function getOpenTicketById($ticket_id)
	{
		$this->db->select('*');
        $this->db->from('ticket_information');
        $this->db->where('ticket_id', $ticket_id);

        $query = $this->db->get();
        return $query->row();
	}

	public function getTicketStatusById($ticket_id)
	{
		$this->db->select('status');
        $this->db->from('tickets');
        $this->db->where('id', $ticket_id);

        $query = $this->db->get();
        return $query->row();
	}
}
?>