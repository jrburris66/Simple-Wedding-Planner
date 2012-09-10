<?php
App::uses('AppController', 'Controller');
/**
 * MylistNotes Controller
 *
 * @property MylistNote $MylistNote
 */
class MylistNotesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MylistNote->recursive = 0;
		$this->set('mylistNotes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MylistNote->id = $id;
		if (!$this->MylistNote->exists()) {
			throw new NotFoundException(__('Invalid mylist note'));
		}
		$this->set('mylistNote', $this->MylistNote->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MylistNote->create();
			if ($this->MylistNote->save($this->request->data)) {
				$this->Session->setFlash(__('The mylist note has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mylist note could not be saved. Please, try again.'));
			}
		}
		$lists = $this->MylistNote->List->find('list');
		$this->set(compact('lists'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MylistNote->id = $id;
		if (!$this->MylistNote->exists()) {
			throw new NotFoundException(__('Invalid mylist note'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MylistNote->save($this->request->data)) {
				$this->Session->setFlash(__('The mylist note has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mylist note could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MylistNote->read(null, $id);
		}
		$lists = $this->MylistNote->List->find('list');
		$this->set(compact('lists'));
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
		$this->MylistNote->id = $id;
		if (!$this->MylistNote->exists()) {
			throw new NotFoundException(__('Invalid mylist note'));
		}
		if ($this->MylistNote->delete()) {
			$this->Session->setFlash(__('Mylist note deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mylist note was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
