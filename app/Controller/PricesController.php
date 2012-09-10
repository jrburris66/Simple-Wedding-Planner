<?php
App::uses('AppController', 'Controller');
/**
 * Prices Controller
 *
 * @property Price $Price
 */
class PricesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Price->recursive = 0;
		$this->set('prices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Price->id = $id;
		if (!$this->Price->exists()) {
			throw new NotFoundException(__('Invalid price'));
		}
		$this->set('price', $this->Price->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Price->create();
			if ($this->Price->save($this->request->data)) {
				$this->Session->setFlash(__('The price has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The price could not be saved. Please, try again.'));
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
		$this->Price->id = $id;
		if (!$this->Price->exists()) {
			throw new NotFoundException(__('Invalid price'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Price->save($this->request->data)) {
				$this->Session->setFlash(__('The price has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The price could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Price->read(null, $id);
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
		$this->Price->id = $id;
		if (!$this->Price->exists()) {
			throw new NotFoundException(__('Invalid price'));
		}
		if ($this->Price->delete()) {
			$this->Session->setFlash(__('Price deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Price was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
