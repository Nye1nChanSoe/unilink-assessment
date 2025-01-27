export type Author = {
  id: number;
  name: string;
  title: string;
  image: string;
  createdAt: string;
  updatedAt: string;
};

export type Tag = {
  id: number;
  icon: string;
  value: string;
  created_at: string;
  updated_at: string;
};

export type BlogPost = {
  id: number;
  title: string;
  subtitle: string;
  contentHtml: string;
  heroImage: string;
  publishedDate: string;
  author: Author;
  tags: Tag[];
  createdAt: string;
  updatedAt: string;
};
