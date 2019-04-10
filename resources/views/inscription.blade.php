@extends('layout')

@section('title','inscription')

@section('contenu')
	<form action="/inscription" method="post">
		{{csrf_field() }}
		<input type="email" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Mot de passe">
		<input type="password" name="password_confirmation" placeholder="Mot de passe(confirmation) ">
		<input type="submit" value="M'inscrire">

	</form>

	<style>
		input{

			width: 50%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			transition: 0,5s;
			outline: none;
			border-radius:4px;

		}

	</style>

@endsection