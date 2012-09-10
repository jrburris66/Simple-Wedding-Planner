<?php
App::uses('AppController', 'Controller');
/**
 * LeadNotes Controller
 *
 * @property LeadNote $LeadNote
 */
class LeadNotesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LeadNote->recursive = 0;
		$this->set('leadNotes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->LeadNote->id = $id;
		if (!$this->LeadNote->exists()) {
			throw new NotFoundException(__('Invalid lead note'));
		}
		$this->set('leadNote', $this->LeadNote->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LeadNote->create();
			if ($this->LeadNote->save($this->request->data)) {
				$this->Session->setFlash(__('The lead note has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead note could not be saved. Please, try again.'));
			}
		}
		$leads = $this->LeadNote->Lead->find('list');
		$this->set(compact('leads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->LeadNote->id = $id;
		if (!$this->LeadNote->exists()) {
			throw new NotFoundException(__('Invalid lead note'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LeadNote->save($this->request->data)) {
				$this->Session->setFlash(__('The lead note has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead note could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->LeadNote->read(null, $id);
		}
		$leads = $this->LeadNote->Lead->find('list');
		$this->set(compact('leads'));
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
		$this->LeadNote->id = $id;
		if (!$this->LeadNote->exists()) {
			throw new NotFoundException(__('Invalid lead note'));
		}
		if ($this->LeadNote->delete()) {
			$this->Session->setFlash(__('Lead note deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lead note was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
