@extends('errors.minimal-layout')
@section('title', '401 ' . __('Unauthorized'))
@section('code', '401')
@section('name', __('Unauthorized'))
@section('message', __('The request was a legal request, but the server is refusing to respond to it. For use when authentication is possible but has failed or not yet been provided.'));
