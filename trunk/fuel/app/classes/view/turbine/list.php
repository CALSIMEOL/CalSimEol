<?php

class View_Turbine_List extends ViewModel
{
	public function view()
	{
		$query = Model_Turbine::query();

		$search = Input::get('search');

		if ($search)
		{
			$query->where('turbine_name', 'LIKE', '%'.$search.'%')
				->or_where('turbine_manufacturer', 'LIKE', '%'.$search.'%');
		}

		$config = array(
			'total_items' => $query->count(),
			'per_page' => 10,
			'uri_segment' => 3,

			'wrapper' => '<nav><ul class="pagination">{pagination}</ul></nav>',

			'previous'               => '<li>{link}</li>',
			'previous-marker'        => '<span aria-hidden="true">&laquo;</span>',
			'previous-link'          => '<a href="{uri}" aria-label="Précédent">{page}</a>',
			'previous-inactive'      => '<li class="disabled">{link}</li>',

			'regular'                => '<li>{link}</li>',
			'regular-link'           => '<a href="{uri}">{page}</a>',
			'active'                 => '<li class="active">{link}</li>',
			'active-link'            => '<a href="{uri}">{page} <span class="sr-only"></span></a>',

			'next'                   => '<li>{link}</li>',
			'next-marker'            => '<span aria-hidden="true">&raquo;</span>',
			'next-link'              => '<a href="{uri}" aria-label="Suivant">{page}</a>',
			'next-inactive'          => '<li class="disabled">{link}</li>',
		);

		$pagination = Pagination::forge('turbine-list-pagination', $config);

		$this->turbines = $query
								->rows_offset($pagination->offset)
								->rows_limit($pagination->per_page)
								->get();

		$this->set('pagination', $pagination, false);
	}
}
