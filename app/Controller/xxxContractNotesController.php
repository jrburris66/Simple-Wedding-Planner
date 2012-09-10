<?php
App::uses('AppController', 'Controller');
/**
 * ContractNotes Controller
 *
 * @property ContractNote $ContractNote
 */
class ContractNotesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContractNote->recursive = 0;
		$this->set('contractNotes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ContractNote->id = $id;
		if (!$this->ContractNote->exists()) {
			throw new NotFoundException(__('Invalid contract note'));
		}
		$this->set('contractNote', $this->ContractNote->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContractNote->create();
			if ($this->ContractNote->save($this->request->data)) {
				$this->Session->setFlash(__('The contract note has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contract note could not be saved. Please, try again.'));
			}
		}
		$contacts = $this->ContractNote->Contact->find('list');
		$this->set(compact('contacts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ContractNote->id = $id;
		if (!$this->ContractNote->exists()) {
			throw new NotFoundException(__('Invalid contract note'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContractNote->save($this->request->data)) {
				$this->Session->setFlash(__('The contract note has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contract note could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ContractNote->read(null, $id);
		}
		$contacts = $this->ContractNote->Contact->find('list');
		$this->set(compact('contacts'));
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
		$this->ContractNote->id = $id;
		if (!$this->ContractNote->exists()) {
			throw new NotFoundException(__('Invalid contract note'));
		}
		if ($this->ContractNote->delete()) {
			$this->Session->setFlash(__('Contract note deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contract note was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
