<?php
App::uses('AppController', 'Controller');
/**
 * ContactNotes Controller
 *
 * @property ContactNote $ContactNote
 */
class ContactNotesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContactNote->recursive = 0;
		$this->set('contactNotes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ContactNote->id = $id;
		if (!$this->ContactNote->exists()) {
			throw new NotFoundException(__('Invalid contact note'));
		}
		$this->set('contactNote', $this->ContactNote->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactNote->create();
			if ($this->ContactNote->save($this->request->data)) {
				$this->Session->setFlash(__('The contact note has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact note could not be saved. Please, try again.'));
			}
		}
		$contacts = $this->ContactNote->Contact->find('list');
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
		$this->ContactNote->id = $id;
		if (!$this->ContactNote->exists()) {
			throw new NotFoundException(__('Invalid contact note'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContactNote->save($this->request->data)) {
				$this->Session->setFlash(__('The contact note has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact note could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ContactNote->read(null, $id);
		}
		$contacts = $this->ContactNote->Contact->find('list');
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
		$this->ContactNote->id = $id;
		if (!$this->ContactNote->exists()) {
			throw new NotFoundException(__('Invalid contact note'));
		}
		if ($this->ContactNote->delete()) {
			$this->Session->setFlash(__('Contact note deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contact note was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
