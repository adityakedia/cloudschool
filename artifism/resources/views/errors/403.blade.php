@extends('errors.minimal-layout')
@section('title', '403 ' . __('Forbidden'))
@section('code', '403')
@section('name', __('Forbidden'))
@section('message', __('The request was a legal request, but the server is refusing to respond to it.'))
