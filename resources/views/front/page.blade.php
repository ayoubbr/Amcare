@extends('layouts.front')

@section('title', $page->meta_title ?? $page->title)
@section('meta_description', $page->description ?? '')

@section('content')
<div class="page-header" style="background-image: url('{{ $page->image ? asset('storage/'.$page->image) : asset('images/default-header.jpg') }}')">
    <div class="container">
        <h1>{{ $page->title }}</h1>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">
                {!! $page->content !!}
            </div>
        </div>
    </div>
</div>

@if($page->slug === 'faq' || $page->slug === 'foire-aux-questions')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.parentElement;
                
                const isActive = faqItem.classList.contains('active');
                
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });
    });
</script>

<style>
    .faq-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 30px 20px;
    }

    .faq-title {
        color: var(--theme-color);
        margin-bottom: 20px;
        font-size: 2.5rem;
        text-align: center;
    }

    .faq-intro {
        text-align: center;
        margin-bottom: 40px;
        font-size: 1.1rem;
        color: #666;
    }

    .faq-item {
        margin-bottom: 30px;
        border: 1px solid #eee;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .faq-question {
        background-color: #f8f8f8;
        padding: 15px 20px;
        margin: 0;
        font-size: 1.2rem;
        color: var(--theme-color);
        cursor: pointer;
        position: relative;
        transition: all 0.3s ease;
    }

    .faq-question:hover {
        background-color: #f0f0f0;
    }

    .faq-question::after {
        content: '+';
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.5rem;
        color: var(--theme-color);
    }

    .faq-item.active .faq-question::after {
        content: '-';
    }

    .faq-answer {
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }

    .faq-item.active .faq-answer {
        padding: 20px;
        max-height: 1000px;
    }

    .faq-answer p {
        margin-bottom: 15px;
        line-height: 1.6;
    }

    .faq-answer ul {
        margin-bottom: 15px;
        padding-left: 20px;
    }

    .faq-answer li {
        margin-bottom: 8px;
        line-height: 1.5;
    }
</style>
@endif
@endsection
