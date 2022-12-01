<!DOCTYPE html>
<html lang="en">
@extends('layouts.main')

@section('container')
  <h1>About</h1>
  <br>  
  <h3>{{ $nim }} </h3>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection