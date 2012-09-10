<?php
App::uses('AppController', 'Controller');
/**
 * ProposalNotes Controller
 *
 * @property ProposalNote $ProposalNote
 */
class ProposalNotesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProposalNote->recursive = 0;
		$this->set('proposalNotes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProposalNote->id = $id;
		if (!$this->ProposalNote->exists()) {
			throw new NotFoundException(__('Invalid proposal note'));
		}
		$this->set('proposalNote', $this->ProposalNote->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProposalNote->create();
			if ($this->ProposalNote->save($this->request->data)) {
				$this->Session->setFlash(__('The proposal note has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal note could not be saved. Please, try again.'));
			}
		}
		$proposals = $this->ProposalNote->Proposal->find('list');
		$this->set(compact('proposals'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProposalNote->id = $id;
		if (!$this->ProposalNote->exists()) {
			throw new NotFoundException(__('Invalid proposal note'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProposalNote->save($this->request->data)) {
				$this->Session->setFlash(__('The proposal note has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal note could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProposalNote->read(null, $id);
		}
		$proposals = $this->ProposalNote->Proposal->find('list');
		$this->set(compact('proposals'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ProposalNote->id = $id;
		if (!$this->ProposalNote->exists()) {
			throw new NotFoundException(__('Invalid proposal note'));
		}
		if ($this->ProposalNote->delete()) {
			$this->Session->setFlash(__('Proposal note deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Proposal note was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
