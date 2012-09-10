<?php
App::uses('AppController', 'Controller');
/**
 * GuestTypes Controller
 *
 * @property GuestType $GuestType
 */
class GuestTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GuestType->recursive = 0;
		$this->set('guestTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GuestType->id = $id;
		if (!$this->GuestType->exists()) {
			throw new NotFoundException(__('Invalid guest type'));
		}
		$this->set('guestType', $this->GuestType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GuestType->create();
			if ($this->GuestType->save($this->request->data)) {
				$this->Session->setFlash(__('The guest type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guest type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->GuestType->id = $id;
		if (!$this->GuestType->exists()) {
			throw new NotFoundException(__('Invalid guest type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GuestType->save($this->request->data)) {
				$this->Session->setFlash(__('The guest type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guest type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GuestType->read(null, $id);
		}
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
		$this->GuestType->id = $id;
		if (!$this->GuestType->exists()) {
			throw new NotFoundException(__('Invalid guest type'));
		}
		if ($this->GuestType->delete()) {
			$this->Session->setFlash(__('Guest type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guest type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
