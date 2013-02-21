<?php
App::uses('AppController', 'Controller');
/**
 * DemoLinks Controller
 *
 * @property DemoLink $DemoLink
 */
class DemoLinksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DemoLink->recursive = 0;
		$this->set('demoLinks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DemoLink->exists($id)) {
			throw new NotFoundException(__('Invalid demo link'));
		}
		$options = array('conditions' => array('DemoLink.' . $this->DemoLink->primaryKey => $id));
		$this->set('demoLink', $this->DemoLink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DemoLink->create();
			if ($this->DemoLink->save($this->request->data)) {
				$this->Session->setFlash(__('The demo link has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The demo link could not be saved. Please, try again.'));
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
		if (!$this->DemoLink->exists($id)) {
			throw new NotFoundException(__('Invalid demo link'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DemoLink->save($this->request->data)) {
				$this->Session->setFlash(__('The demo link has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The demo link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DemoLink.' . $this->DemoLink->primaryKey => $id));
			$this->request->data = $this->DemoLink->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DemoLink->id = $id;
		if (!$this->DemoLink->exists()) {
			throw new NotFoundException(__('Invalid demo link'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DemoLink->delete()) {
			$this->Session->setFlash(__('Demo link deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Demo link was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
